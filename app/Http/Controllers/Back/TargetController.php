<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\TargetRequest;
use App\Drug;
use App\Herb;
use App\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('admin.targets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.targets.form_add_target');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TargetRequest $request)
    {
        $target = new Target;

        $target->user_id = Auth::user()->id;
        $target->name = $request->name;
        $target->long_name = $request->long_name;
        $target->notes = $request->notes;
        $target->target_type_id = $request->target_type_id;
        $target->save();
        Alert::success('Ok !', 'Nouveau target ajouté avec succès');

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
    public function edit(Target $target)
    {
        return view('admin.targets.form_add_target', ['target' => $target ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Target $target)
    {
        $target->update($request->all());
        Alert::success('Ok !', 'Votre target a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Target $target)
    {
        $target->delete();
        return redirect(route('target.index'));

    }

    public function alert(Target $target) {

        return view('admin.targets.destroy', ['target' => $target]);
    }
  
    public function details($id)
    {
        $target = Target::findOrFail($id);

        return view('admin.targets.show',$target);
    }
}
