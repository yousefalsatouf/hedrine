<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\HinteractionRequest;
use App\Hinteraction;
use App\Target;
use App\User;
use App\Effect;
use App\Force;
use App\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;



class HinteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hinteractions = Hinteraction::all();
        return view('admin.hinteractions.index', compact('hinteractions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $effects = Effect::all();
        $hinteraction = Hinteraction::all();
        $targets = Target::all();
        return view('admin.hinteractions.form_add_hinteraction', compact('targets','hinteractions','effects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HinteractionRequest $request)
    {
        $hinteraction = new Hinteraction;

        $hinteraction->user_id = Auth::user()->id;
        $hinteraction->name = $request->name;
        $hinteraction->drug_families_id = $request->drug_families_id;
        $hinteraction->route_id = $request->route_id;
        $hinteraction->atc_level_4s_id = $request->atc_level_4s_id;

        $hinteraction->save();
        Alert::success('Ok !', 'Nouveau DCI ajouté avec succès');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hinteraction $hinteraction)
    {
        $references = Reference::orderBy('title', 'ASC')->get();
        $forces = Force::orderBy('name', 'ASC')->get();
        $effects = Effect::orderBy('name', 'ASC')->get();
        $hinteractions = Hinteraction::all();
        
        return view('admin.hinteractions.form_add_hinteraction',['hinteraction' => $hinteraction], compact('hinteractions','effects','forces','references'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hinteraction $hinteraction)
    {
        $hinteraction->update($request->all());
        
        Alert::success('Ok !', 'Votre Interaction Plante a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hinteraction $hinteraction)
    {
        $hinteraction->delete();
        return redirect(route('hinteraction.index'));

    }

    public function alert(Hinteraction $hinteraction) {

        return view('admin.hinteraction.destroy', ['hinteraction' => $hinteraction]);
    }

    public function details($id)
    {
        $d = Hinteraction::findOrFail($id);

        return view('admin.hinteraction.show',$hinteraction);
    }
}
