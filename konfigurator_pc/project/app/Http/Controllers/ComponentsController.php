<?php

namespace App\Http\Controllers;

use App\Models\COOLING;
use App\Models\CPU;
use App\Models\DRIVE;
use App\Models\GPU;
use App\Models\MBD;
use App\Models\PC_CASE;
use App\Models\PSU;
use App\Models\RAM;
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
     */
    public function list(Request $request, string $component, string $type) {
        $request->flash();  // TODO czy to na pewno jest potrzebne?

        switch($component) {
            case 'cpu':
                $elements = CPU::filter($request);
                $configOptions = CPU::$filters;
                break;
            case 'gpu':
                $elements = GPU::filter($request);
                $configOptions = GPU::$filters;
                break;
            case 'ram':
                $elements = RAM::filter($request);
                $configOptions = RAM::$filters;
                break;
            case 'psu':
                $elements = PSU::filter($request);
                $configOptions = PSU::$filters;
                break;
            case 'mb':
                $elements = MBD::filter($request);
                $configOptions = MBD::$filters;
                break;
            case 'drive':
                $elements = DRIVE::filter($request);
                $configOptions = DRIVE::$filters;
                break;
            case 'case':
                $elements = PC_CASE::filter($request);
                $configOptions = PC_CASE::$filters;
                break;
            case 'cooling':
                $elements = COOLING::filter($request);
                $configOptions = COOLING::$filters;
                break;
            default:
                return redirect("/");
        }
        return view("comp.list", [
            "configOptions" => $configOptions,
            "data" => $elements->get(),
            "type" => $type,
            "comp" => $component
        ]);
    }

    public function details(Request $request, string $component, string $type, $id)
    {
        switch ($component) {
            case 'cpu':
                $elements = CPU::find($id);
                break;
            case 'gpu':
                $elements = GPU::find($id);
                break;
            case 'ram':
                $elements = RAM::find($id);
                break;
            case 'psu':
                $elements = PSU::find($id);
                break;
            case 'mb':
                $elements = MBD::find($id);
                break;
            case 'drive':
                $elements = DRIVE::find($id);
                break;
            case 'case':
                $elements = PC_CASE::find($id);
                break;
            case 'cooling':
                $elements = COOLING::find($id);
                break;
            default:
                return redirect("/");
        }

        return view("comp.details", [
            "data" => $elements,
            "type" => $type,
            "comp" => $component
        ]);
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
                break;
            case 'gpu':
                $queriedComponent = GPU::where('id', $specificComponentId)->first();
                break;
            case 'ram':
                $queriedComponent = RAM::where('id', $specificComponentId)->first();
                break;
            case 'psu':
                $queriedComponent = PSU::where('id', $specificComponentId)->first();
                break;
            case 'mb':
                $queriedComponent = MBD::where('id', $specificComponentId)->first();
                break;
            case 'drive':
                $queriedComponent = DRIVE::where('id', $specificComponentId)->first();
                break;
            case 'case':
                $queriedComponent = PC_CASE::where('id', $specificComponentId)->first();
                break;
            case 'cooling':
                $queriedComponent = COOLING::where('id', $specificComponentId)->first();
                break;
        }
        session([$componentType => $queriedComponent]);   // save component to session
        return redirect("/config/create");
    }
}
