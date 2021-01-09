<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    public function index()
    {
        return view('config.index', ['configs' => Config::all()]);
    }

    public function create()
    {
        return view('config.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required'
        ]);

        $pcconfig = new Config($request->input());

        $pcconfig->fillComponents($request->session());

        $pcconfig->calcPrice();
        
        $pcconfig->save();

        $request->session()->forget($pcconfig->componentsNames); // clean session

        return redirect("config/".$pcconfig->id);
    }

    public function show(Config $config)
    {
        $user = Auth::user();
        return view("config.show", ['config' => $config, 'user' => $user]);
    }

    public function edit(Config $config)
    {
        $id = Auth::id();
        if ($config->user_id == $id) {
            return view("user.edit", ['config' => $config]);
        }
        else {
            return abort('403');
        }

    }

    public function update(Config $config)
    {
        //TODO: lepsza walidacja
        $config->update(request()->validate([
            'cpu_id' => 'required',
            'gpu_id' => 'required',
            'mb_id' => 'required',
            'ram_id' => 'required'
        ]));

        return redirect("config/".$config->id);
    }

    public function destroy(Config $config)
    {
        $id = Auth::id();
        if ($config->user_id == $id) {
            $config->delete();
            return redirect('/user/'.$id);
        }
        else {
            return abort('403');
        }
    }

    public function verify(Config $config)
    {
        $user = Auth::user();
        if ($user->user_type == 'admin') {
            if ($config->is_verified == true) {
                $config->is_verified = false;
                $config->save();
            }
            else {
                $config->is_verified = true;
                $config->save();
            }


            return redirect()->route('config.show', $config);
        }
        else {
            return abort('403');
        }

    }
}
