<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\TargetTypeRequest;
use App\TargetType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewDrug as NewDrugNotification;


class TargetTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.targetTypes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.targetTypes.form_add_target_type');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TargetTypeRequest $request)
    {
        $target_type = new TargetType;

        $target_type->name = $request->name;
        $target_type->rank = $request->rank;
        $target_type->description = $request->description;
        $target_type->save();
        Alert::success('Ok !', 'Nouveau type de target ajouté avec succès');

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
    public function edit(TargetType $target_type)
    {
        return view('admin.targetTypes.form_add_target_type',['target_type' => $target_type ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TargetType $target_type)
    {
        $target_type->update($request->all());
        Alert::success('Ok !', 'Votre type de target a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TargetType $target_type)
    {
        $target_type->delete();
        return redirect(route('target_type.index'));

    }

    public function alert(TargetType $target_type) {

        return view('admin.targetTypes.destroy', ['target_type' => $target_type]);
    }

    public function details($id)
    {
        $drug = Drug::findOrFail($id);

        return view('admin.targetTypes.show',$target_type);
    }
}
