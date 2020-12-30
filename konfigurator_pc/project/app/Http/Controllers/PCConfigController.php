<?php

namespace App\Http\Controllers;

use App\Models\PCConfig;
use Illuminate\Http\Request;

class PCConfigController extends Controller
{

    public function index()
    {
        return view('pcconfig.index', ['pcconfigs' => PCConfig::all()]);
    }

    public function create()
    {
        return view('pcconfig.create');
    }

    public function store()
    {
        $pcconfigs = PCConfig::create(request()->validate([
            'cpu_id' => 'required',
            'gpu_id' => 'required',
            'mb_id' => 'required',
            'ram_id' => 'required'
        ]));

        return redirect("pcconfig/".$pcconfigs->id);
    }

    public function show(PCConfig $config)
    {
        return view("pcconfig.show", ['pcconfig' => $config]);
    }

    public function edit(PCConfig $config)
    {
        return view("pcconfig.edit", ['pcconfig' => $config]);
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
