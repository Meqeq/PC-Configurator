<?php

namespace App\Http\Controllers;

use App\Models\CPU;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{   
    /**
     * Shows menu of available components
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view("comp.index");
    }

    /**
     * Shows filtered list of components
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $component Name of component ex. cpu/mb/gpu
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request, string $component, string $type) {
        $request->flash();

        switch($component) {
            case 'cpu':
                $elements = CPU::filter($request);       

                return view("comp.list", [
                    "configOptions" => CPU::$filters,
                    "data" => $elements->get(),
                    "type" => $type,
                    "comp" => $component
                ]);
            default:
                return redirect("/");
        }
    }

    public function details(Request $request, string $component, string $type, $id) {
        return redirect("/");
    }
}
