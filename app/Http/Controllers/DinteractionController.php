<?php

namespace App\Http\Controllers;

use App\Dinteraction;
use App\Drug;
use App\Effect;
use App\Force;
use App\Herb;
use App\Reference;
use App\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DinteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drugs = Drug::orderBy('name', 'desc')->get();
        $targets = Target::orderBy('name', 'desc')->get();
        $effects = Effect::orderBy('name', 'desc')->get();
        $force = Force::orderBy('name', 'desc')->get();
        $references = Reference::orderBy('title', 'desc')->get();
        //dd($references);

        return view('admin.interaction.targets.newDrugTargetForm', compact('drugs', 'targets', 'effects', 'force', 'references'));
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
        //dd(Auth::user()->role_id);
        $effects = $request->effects;
        $references = $request->references;
        $now = \Carbon\Carbon::now();

        $dinteraction = new Dinteraction;
        $dinteraction->user_id = Auth::user()->id;
        $dinteraction->drug_id = $request->drug;
        $dinteraction->target_id = $request->target;
        $dinteraction->force_id = $request->force;
        $dinteraction->notes = $request->note;
        if (Auth::user()->role_id)
        {
            $dinteraction->validated = $now;
        }
        $dinteraction->save();

        $dinteraction->effects()->sync($effects, false);
        $dinteraction->references()->sync($references, false);

        Alert::success('Ok,', 'Drug target inserted successfully!');

        return redirect('admin/target');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dinteraction  $dinteraction
     * @return \Illuminate\Http\Response
     */
    public function show(Dinteraction $dinteraction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dinteraction  $dinteraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Dinteraction $dinteraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dinteraction  $dinteraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinteraction $dinteraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dinteraction  $dinteraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dinteraction $dinteraction)
    {
        //
    }
}
