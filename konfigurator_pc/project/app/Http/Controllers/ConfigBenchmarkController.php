<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigBenchmarkController extends Controller
{

    public function index(Config $config)
    {
        return view('config.benchmark.index')->withConfig($config);
    }

    public function create(Config $config)
    {
        return view('config.benchmark.create', $config)->withConfig($config);
    }


    public function store(Request $request, Config $config)
    {
        $validData = $request->validate([
            "value" => "required",
        ]);

        $config->benchmark = $request->value;
        $config->save();

        return redirect()->route('benchmarkIndex', $config);

    }


    public function edit(Config $config)
    {
        return view('config.benchmark.edit')->withConfig($config);
    }

    public function update(Request $request, Config $config)
    {
        $validData = $request->validate([
            "value" => "required",
        ]);

        $config->benchmark = $request->value;
        $config->save();

        return redirect()->route('benchmarkIndex', $config);
    }

    public function destroy(Config $config)
    {
        $config->benchmark = 0;
        $config->save();
        return redirect()->route('benchmarkIndex', $config);
    }
}
