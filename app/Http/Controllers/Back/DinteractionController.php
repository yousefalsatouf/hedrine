<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\DinteractionRequest;
use App\Dinteraction;
use App\Target;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;



class DinteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinteractions = Dinteraction::all();
        return view('admin.dinteractions.index', compact('dinteractions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        $targets = Target::all();
        return view('admin.drugs.form_add_drug', compact('routes','targets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrugRequest $request)
    {
        $drug = new Drug;

        $drug->user_id = Auth::user()->id;
        $drug->name = $request->name;
        $drug->drug_families_id = $request->drug_families_id;
        $drug->route_id = $request->route_id;
        $request->validated? $drug->validated = 1 : $drug->validated = 0;
        $drug->atc_level_4s_id = $request->atc_level_4s_id;

        $drug->save();
        $drug->targets()->sync($request->targets, false);
        Alert::success('Ok !', 'Nouveau DCI ajouté avec succès');

        $adminusers = User::with('roles')->where('role_id','1')->get();
        // //dd($adminusers);
        foreach($adminusers as $adm) {
        //     //Mail::to($adm)->send(new NewHerb($herb, $user));
            $adm->notify(new NewDrugNotification($drug));

        }
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
    public function edit(Dinteraction $dinteraction)
    {
        $dinteractions = Dinteraction::all();
        // dd($dinteractions);
        return view('admin.dinteractions.form_add_dinteraction',['dinteraction' => $dinteraction], compact('dinteractions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinteraction $dinteraction)
    {
        $dinteraction->update($request->all());
        $dinteraction->targets()->sync($request->targets, false);
        Alert::success('Ok !', 'Votre Interaction drug a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dinteraction $dinteraction)
    {
        $dinteraction->delete();
        return redirect(route('dinteraction.index'));

    }

    public function alert(Dinteraction $dinteraction) {

        return view('admin.dinteractions.destroy', ['dinteraction' => $dinteraction]);
    }

    public function details($id)
    {
        $d = Dinteraction::findOrFail($id);

        return view('admin.dinteractions.show',$drug);
    }
}
