<?php

namespace App\Http\Controllers;

use App\Models\PCConfig;
use Illuminate\Http\Request;

class PCConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pcconfigs = PCConfig::all();
        return view('pcconfig.index')->withPCConfigs($pcconfigs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pcconfig.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: lepsza walidacja?
        $request->validate([
            'cpu_id' => 'required',
            'gpu_id' => 'required',
            'mb_id' => 'required',
            'ram_id' => 'required'
        ]);

        // TODO: uzupelnic pozostale wartosci
        $pcconfigs = new PCConfig();
        $pcconfigs->cpu_id = $request->cpu_id;
        $pcconfigs->gpu_id = $request->gpu_id;
        $pcconfigs->mb_id = $request->mb_id;
        $pcconfigs->ram_id = $request->ram_id;
        $pcconfigs->save();

        return redirect("pcconfig/".$pcconfigs->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pcconfig = PCConfig::findOrFail($id);
        return view("pcconfig.show", )->withPCConfig($pcconfig);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pcconfig = PCConfig::find($id);
        return view("pcconfig.edit")->withPCConfig($pcconfig);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pcconfig = PCConfig::findOrFail($id);

        // TODO: lepsza walidacja?
        $request->validate([
            'cpu_id' => 'required',
            'gpu_id' => 'required',
            'mb_id' => 'required',
            'ram_id' => 'required'
        ]);

        $input = $request->all();

        $pcconfig->fill($input)->save();

        return redirect("pcconfig/".$pcconfig->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // TODO check if user has permission to delete

        $pcconfig = PCConfig::findOrFail($id);
        $pcconfig->delete();
        return redirect()->route('pcconfig.index');
    }
}
