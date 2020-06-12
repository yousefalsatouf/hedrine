<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReferenceRequest;
use App\Reference;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewDrug as NewDrugNotification;


class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.references.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.references.form_add_reference');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReferenceRequest $request)
    {
        $reference = new Reference;

        $reference->user_id = Auth::user()->id;
        $reference->title = $request->title;
        $reference->authors = $request->authors;
        $reference->year = $request->year;
        $reference->edition = $request->edition;
        $reference->url = $request->url;
        $reference->user_id = $request->user_id;
        $reference->save();
        Alert::success('Ok !', 'Nouvelle référence ajoutée avec succès');

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
    public function edit(Reference $reference)
    {
        return view('admin.drugs.form_add_drug',['reference' => $reference ]);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reference $reference)
    {
        $reference->update($request->all());
        Alert::success('Ok !', 'Votre référence a étè mise à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reference $reference)
    {
        $reference->delete();
        return redirect(route('reference.index'));

    }

    public function alert(Reference $reference) {

        return view('admin.references.destroy', ['reference' => $reference]);
    }

    public function details($id)
    {
        $reference = Reference::findOrFail($id);

        return view('admin.references.show',$reference);
    }
}
