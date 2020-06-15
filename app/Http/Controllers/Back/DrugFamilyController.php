<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\DrugFamily;
use App\Http\Controllers\Controller;
use App\Http\Requests\DrugFamilyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class DrugFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drug_families = DrugFamily::all();

        return view('admin.drugFamilies.index', compact('drug_families'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.drugFamilies.form_create_drug_family');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrugFamilyRequest $request)
    {
        $drug_family = new DrugFamily;
        //dd($drug->name);
        $drug_family->name = $request->name;
        $drug_family->save();
        //dd($drugFamily->name);

        Alert::success('Ok !', 'Nouvelle Family de drug ajouté avec succès');

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
    public function edit(DrugFamily $drug_family)
    {
        return view('admin.drugFamilies.form_create_drug_family',['drug_family' => $drug_family ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DrugFamily $drug_family)
    {
        $drug_family->update($request->all());
        Alert::success('Ok !', 'Votre famille de DCI a étè mise à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DrugFamilies $drug_family)
    {
        
        $drug_family->delete();
        return redirect(route('drug_family.index'));

    }

    public function alert(DrugFamily $drugFamily)
    {
        //dd($drugFamily);

        return view('admin.drugsFamily.destroy', ['drugFamily' => $drugFamily]);
    }

}
