<?php

namespace App\Http\Controllers;

use App\Models\PCConfig;
use Illuminate\Http\Request;

class PCConfigController extends Controller
{

    public function index()
    {
        return view('pcconfig.index', ['pcConfigs' => PCConfig::all()]);
    }

    public function create()
    {
        return view('pcconfig.create');
    }

    public function store()
    {
        $pcConfigs = PCConfig::create(request()->validate([
            'cpu_id' => 'required',
            'gpu_id' => 'required',
            'mb_id' => 'required',
            'ram_id' => 'required'
        ]));

        return redirect("pcconfig/".$pcConfigs->id);
    }

    public function show(PCConfig $config)
    {
        echo "<pre>";
        print_r($config);
        echo "</pre>";
        return view("pcconfig.show", ['pcConfig' => $config]);
    }

    public function edit(PCConfig $config)
    {
        return view("pcconfig.edit", ['pcConfig' => $config]);
    }

    public function update(PCConfig $config)
    {
        //TODO: lepsza walidacja
        $config->update(request()->validate([
            'cpu_id' => 'required',
            'gpu_id' => 'required',
            'mb_id' => 'required',
            'ram_id' => 'required'
        ]));

        return redirect("pcconfig/".$config->id);
    }

    public function destroy(PCConfig $config)
    {
        // TODO check if user has permission to delete

        $config->delete();
        return redirect()->route('pcconfig.index');
    }
}
