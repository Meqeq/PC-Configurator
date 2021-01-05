<?php

namespace App\Http\Controllers;

use App\Models\Component;
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
     * @param  string  $type Type of the request: list/select
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
           switch($component) {
            case 'cpu':
                $elements = CPU::find($id);

                return view("comp.details", [
                    "data" => $elements,
                    "type" => $type,
                    "comp" => $component
                ]);
            default:
                return redirect("/");
        }
    }


    /**
     * Picks the component
     * @param  string  $componentType Name of component ex. cpu/mb/gpu
     * @param  string  $type Type of the request: list/select
     */
    public function pick(Request $request, string $componentType, string $type) {
        $componentType = $request->input('comp');
        $specificComponentId = $request->input('componentID');
        switch ($componentType) {
            case 'cpu':
                $queriedComponent = CPU::where('id', $specificComponentId)->first();
        }
        session([$componentType => $queriedComponent]);   // save component to session
        return redirect("/config/create");
    }
}
