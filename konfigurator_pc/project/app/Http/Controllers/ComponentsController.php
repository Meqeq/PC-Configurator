<?php

namespace App\Http\Controllers;

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

        return view("comp.index", ["config" => new Config()]);
    }

    /**
     * Shows filtered list of components
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $component Name of component ex. cpu/mb/gpu
     * @param  string  $action Type of the request: list/select
     */
    public function list(Request $request, string $component, string $action) {
        $request->flash();  // TODO czy to na pewno jest potrzebne?

        $element = "\App\Models\\".strtoupper($component);

        if(!class_exists($element))
            return abort(404);

        $elements = $element::filter($request);
        $configOptions = $element::$filters;
        
        return view("comp.list", [
            "configOptions" => $configOptions,
            "data" => $elements->get(),
            "action" => $action,
            "comp" => $component
        ]);
    }

    /**
     * Shows details of component
     * @param  string  $component Name of component ex. cpu/mb/gpu
     * @param  string  $action Type of the request: list/select
     * @param  string  $id Type of the request: id of component
     */
    public function details(string $component, string $action, $id)
    {
        $element = "\App\Models\\".strtoupper($component);

        if(!class_exists($element))
            return abort(404);

        $elements = $element::find($id);

        return view("comp.details", [
            "data" => $elements,
            "action" => $action,
            "comp" => $component
        ]);
    }


    /**
     * Picks the component
     * @param  string  $comp Name of component ex. cpu/mb/gpu
     * @param  string  $id id of component
     */
    public function pick(string $comp, string $id) {
        $config = Config::getFromSessionOrCreate();

        $element = "\App\Models\\".strtoupper($comp);

        if(!class_exists($element))
            return abort(404);

        $config->$comp()->associate($element::find($id));

        $config->saveInSession();

        if (session()->get('edit', false))
            return redirect(route("config.edit", ['config'=>$config]));

        return redirect(route("config.create"));
    }
}
