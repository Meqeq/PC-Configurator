<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

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

    public function store()
    {
        $configs = Config::create(request()->validate([
            'cpu_id' => 'required',
            'gpu_id' => 'required',
            'mb_id' => 'required',
            'ram_id' => 'required'
        ]));

        return redirect("config/".$configs->id);
    }

    public function show(Config $config)
    {
//        echo "<pre>";
//        print_r($config);
//        echo "</pre>";
        return view("config.show", ['config' => $config]);
    }

    public function edit(Config $config)
    {
        return view("config.edit", ['config' => $config]);
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
        // TODO check if user has permission to delete

        $config->delete();
        return redirect('/config');
    }
}
