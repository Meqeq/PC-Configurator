<?php

namespace App\Http\Controllers;

use App\Models\CPU;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{   
    /**
     * Shows filtered list of components
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $component Name of component ex. cpu/mb/gpu
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request, string $component) {
        $request->flash();

        switch($component) {
            case 'cpu':
                $elements = CPU::filter($request);       

                return view("pcconfig.select", [
                    "configOptions" => CPU::$filters,
                    "data" => $elements->get()
                ]);
            default:
                return redirect("/");
        }
    }
}
