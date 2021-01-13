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
use App\Models\Config;
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
     * @param  string  $yype Name of component ex. cpu/mb/gpu
     * @param  string  $id Type of the request: id of component
     */
    public function pick(Request $request, string $type, string $id) {
        $config = Config::getFromSessionOrCreate();

        switch ($type) {
            case 'cpu':
                $config->$type()->associate(CPU::find($id));
                break;
            case 'gpu':
                $config->$type()->associate(GPU::find($id));
                break;
            case 'ram':
                $config->$type()->associate(RAM::find($id));
                break;
            case 'psu':
                $config->$type()->associate(PSU::find($id));
                break;
            case 'mb':
                $config->$type()->associate(MBD::find($id));
                break;
            case 'drive':
                $config->$type()->associate(DRIVE::find($id));
                break;
            case 'case':
                $config->$type()->associate(PC_CASE::find($id));
                break;
            case 'cooling':
                $config->$type()->associate(COOLING::find($id));
                break;
        }

        $config->saveInSession();

        return redirect(route("config.create"));
    }
}
