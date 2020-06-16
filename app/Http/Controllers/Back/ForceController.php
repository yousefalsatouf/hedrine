<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForceRequest;
use App\Force;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class ForceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $forces = Force::all();
        return view('admin.forces.index', compact('forces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forces.form_add_force');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForceRequest $request)
    {
        $force = new Force;

        $force->name = $request->name;
        $force->color = $request->color;
        $force->rang = $request->rang;
        $force->visible = $request->visible;
        $force->save();
        
        Alert::success('Ok !', 'Nouvelle force ajouté avec succès');

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
    public function edit(Force $force)
    {
        
        return view('admin.forces.form_add_force',['force' => $force ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Force $force)
    {
        $force->update($request->all());
        
        Alert::success('Ok !', 'Votre Force a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Force $force)
    {
        $force->delete();
        return redirect(route('force.index'));

    }

    public function alert(Force $force) {

        return view('admin.forces.destroy', ['force' => $force]);
    }

    public function details($id)
    {
        $force = Force::findOrFail($id);

        return view('admin.forces.show',$force);
    }
}
