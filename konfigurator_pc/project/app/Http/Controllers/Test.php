<?php

namespace App\Http\Controllers;

use App\Models\CPU;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function select(Request $request) {
        $request->flash();

        $elements = CPU::filter($request);

        return view("pcconfig.select", [
            "configOptions" => CPU::$filters,
            "data" => $elements->get()
        ]);
    }
}
