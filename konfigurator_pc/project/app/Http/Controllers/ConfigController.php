<?php

namespace App\Http\Controllers;

use App\Models\Component;
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
//        $this->validate($request, [ // TODO better validation ?
//            'cpu_id' => 'required',
//            'gpu_id' => 'required',
//            'mb_id' => 'required',
//            'ram_id' => 'required'
//        ]);

        $pcconfig = new Config();
        $pcconfig->title = $request->input("title");
        $pcconfig->desc = $request->input("desc");
        $pcconfig->cpu_id = session('cpu')->id;
        $pcconfig->gpu_id = session('gpu')->id;
        $pcconfig->mb_id = (session('mb'))->id;
        $pcconfig->case_id = session('case')->id;
        $pcconfig->drive_id = session('drive')->id;
        $pcconfig->psu_id = session('psu')->id;
        $pcconfig->ram_id = 1;
        $pcconfig->cooling_id = 1;
        $pcconfig->is_verified = false;
        $pcconfig->price = 0;
        // TODO clean session
        // TODO calculate price and add additional components
        $pcconfig->save();

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
