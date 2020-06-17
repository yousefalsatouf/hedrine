<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\HerbForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\HerbFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class HerbFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herb_forms = HerbForm::all();

        return view('admin.herbForms.index', compact('herb_forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.herbForms.form_create_herb_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HerbFormRequest $request)
    {
        $herb_form = new HerbForm;
        $herb_form->name = $request->name;
        $herb_form->save();
       

        Alert::success('Ok !', 'Nouvelle forme de plante ajoutée avec succès');

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
    public function edit(HerbForm $herb_form)
    {
        return view('admin.herbForms.form_create_herb_form',['herb_form' => $herb_form ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HerbForm $herb_form)
    {
        $herb_form->update($request->all());
        Alert::success('Ok !', 'Votre forme de plante a étè mise à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HerbForm $herb_form)
    {
        
        $herb_form->delete();
        return redirect(route('herb_form.index'));

    }

    public function alert(HerbForm $herb_form)
    {

        return view('admin.herbForms.destroy', ['herb_form' => $herb_form]);
    }

}
