<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Herb;
use App\HerbHasForm;
use App\Drug;
use App\Hinteraction;
use App\Target;
use APP\HerbForm;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;

class HerbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numberOfTimes_herbForms = 0;
        $lastHerb = 0;
        
        //dd($herb_forms);
        
        //on retourne le résultat dans une view nommée index, la vue se trouve dans la dossier herbs
        return view('herbs/index', compact('numberOfTimes_herbForms', 'lastHerb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function details($id)
    {
        //DD je récupère les informations de la plante (pas les effects et pas les références)
        
        $herb = Herb::with('hinteractions.herbs','hinteractions.effects','hinteractions.targets')->findOrFail($id);
        
          dd($herb);
        return view("herbs/details",compact('herb'));
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return  view("herbs/test");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function show(Herb $herb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function edit(Herb $herb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Herb $herb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herb $herb)
    {
        //
    }

   
}
