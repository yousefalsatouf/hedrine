<?php

namespace App\Http\Controllers;

use App\Effect;
use App\Force;
use App\Herb;
use App\Hinteraction;
use App\Reference;
use App\Target;
use Illuminate\Http\Request;

class HinteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('interaction.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_mecanisme_form()
    {


        return view('interaction.index_mecanisme');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return to herb form
        $herbs = Herb::all();
        $targets = Target::all();
        $effects = Effect::all();
        $force = Force::all();
        $references = Reference::all();

        return view('admin.interaction.targets.newHerbTargetForm', compact('herbs', 'targets', 'effects', 'force', 'references'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hinteraction  $hinteraction
     * @return \Illuminate\Http\Response
     */
    public function show(Hinteraction $hinteraction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hinteraction  $hinteraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Hinteraction $hinteraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hinteraction  $hinteraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hinteraction $hinteraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hinteraction  $hinteraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hinteraction $hinteraction)
    {
        //
    }
}
