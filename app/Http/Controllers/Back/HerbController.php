<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\HerbRequest;
use App\Drug;
use App\Herb;
use App\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class HerbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herbs = Herb::all();
        return view('admin.herbs.index', compact('herbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.herbs.form_add_herb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HerbRequest $request)
    {
        $herb = new Herb;

        $herb->user_id = Auth::user()->id;
        $herb->name = $request->name;
        $herb->sciname = $request->sciname;
        $herb->save();
        Alert::success('Ok !', 'Nouvelle plante ajouté avec succès');

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
    public function edit(Herb $herb)
    {
        return view('admin.herbs.form_add_herb', ['herb' => $herb ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Herb $herb)
    {
        $herb->update($request->all());
        Alert::success('Ok !', 'Votre plante a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herb $herb)
    {
        $herb->delete();
        return redirect(route('herb.index'));

    }

    public function alert(Herb $herb) {

        return view('admin.herbs.destroy', ['herb' => $herb]);
    }
  
    public function details($id)
    {
        $herb = Herb::findOrFail($id);

        return view('admin.herbs.show',$herb);
    }
}