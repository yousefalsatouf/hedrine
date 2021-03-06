<?php

namespace App\Http\Controllers;

use App\DrugFamily;
use App\Effect;
use App\Force;
use App\Herb;
use App\Drug;
use App\Hinteraction;
use App\HinteractionHasEffect;
use App\Reference;
use App\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class HinteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herbs = Herb::all();


        return view('interaction.index', compact('herbs'));
    }

    public function get_herbs()
    {
        $herbs = Herb::where('validated',1)->orderBy('name')->get();
        return $herbs;
        // return $herbs->toJson();
    }

    public function get_drugs(Request $request)
    {
        $drugs = Drug::where('validated',1)->orderBy('name')->get();

        if ($request->name === 'drugF')
            $drugs = DrugFamily::orderBy('name')->get();

        return $drugs;
        // return $herbs->toJson();
    }

    public function getHerbs(Request $request) {

        $hinteractions = Hinteration::with('herbs')->whereIn('id',$request->id)->get();

        return $hinteractions;

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
        $herbs = Herb::orderBy('name', 'desc')->get();
        $targets = Target::orderBy('name', 'desc')->get();
        $effects = Effect::orderBy('name', 'desc')->get();
        $force = Force::orderBy('name', 'desc')->get();
        $references = Reference::orderBy('title', 'desc')->get();

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
        //dd(Auth::user()->role_id);
        $effects = $request->effects;
        $references = $request->references;
        $now = \Carbon\Carbon::now();

        $hinteraction = new Hinteraction;
        $hinteraction->user_id = Auth::user()->id;
        $hinteraction->herb_id = $request->herb;
        $hinteraction->target_id = $request->target;
        $hinteraction->force_id = $request->force;
        $hinteraction->notes = $request->note;
        if (Auth::user()->role_id == 1)
        {
            $hinteraction->validated = 1;
        }
        $hinteraction->save();

        $hinteraction->effects()->sync($effects, false);
        $hinteraction->references()->sync($references, false);

        Alert::success('Ok,', 'Herb target inserted successfully!');

        return redirect()->route('hinteraction.index');
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
