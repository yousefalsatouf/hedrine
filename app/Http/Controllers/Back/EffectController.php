<?php

namespace App\Http\Controllers\Back;

use App\DataTables\EffectssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\EffectRequest;
use App\Effect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class EffectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $effects = Effect::all();
        return view('admin.effects.index', compact('effects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.effects.form_add_effect');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EffectRequest $request)
    {
        $effect = new Effect;

        $effect->name = $request->name;
        $effect->save();
        Alert::success('Ok !', 'Nouvel effet ajouté avec succès');
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
    public function edit(Effect $effect)
    {
        return view('admin.effects.form_add_effect', ['effect' => $effect ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Effect $effect)
    {
        $effect->updated_at->now();
        $effect->update($request->all());

        Alert::success('Ok !', 'Votre effet a étè mis à jour avec succès');

        return redirect(route('effect.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Effect $effect)
    {
        $effect->delete();
        return redirect(route('effect.index'));

    }

    public function alert(Effect $effect) {

        return view('admin.effects.destroy', ['effect' => $effect]);
    }


    public function details($id)
    {
        $effect = Effect::findOrFail($id);

        return view('admin.effects.show',$effect);
    }
}
