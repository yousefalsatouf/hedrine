<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Herb;
use App\HerbHasForm;
use App\Drug;
use App\Hinteraction;
use App\Target;
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

    

        //$herbs = Herb::all();
        $posts = Post::all();
        $drugs = Drug::all();
        $targets = Target::all();
        $herbs = Herb::with('herb_forms')->get(); //DD permet d'ajouter la relation avec la table herb_forms

        /* foreach ($herbs as $herb) 
        {
            echo "<pre>";
            echo $herb->name;
            echo $herb->sciname;
            echo $herb->herb_forms;
            echo "</pre>";
        } */

    

        // dd($herbs);
    
        
        //on retourne le résultat dans une view nommée index, la vue se trouve dans la dossier herbs
        return view('herbs/index',compact('herbs','posts','drugs', 'targets'));
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
        
        $informations_plante = DB::table('herbs')
            ->select('herbs.name as hname', 'herbs.sciname', 'herbs.id as herbid',
            'hinteractions.id as hinteractionid','hinteractions.note as hinteractionnote',
            'hinteractions.force_id','targets.name as targetname', 'forces.name as force_name')
            ->leftJoin('hinteractions', 'herbs.id', '=', 'herb_id')
            ->leftJoin('forces', 'forces.id', '=', 'force_id')
            ->leftJoin('targets', 'targets.id', '=', 'hinteractions.target_id')->where('herbs.id', $id)
            //add here a subquery to select effects.name from hinteractions_has_effects with hinteractions.id
            ->get();
            //dd($informations_plante);

            DB::enableQueryLog();
            //DD avec cette seconde requête, j'essaie de récupérer le nom des effets
            //each $collection permet de parcourir la collection obtenue avec la requête ci-dessus
            $hinteractions_has_effects =  $informations_plante->each(function ($collection, $iteration) {
                DB::table('hinteraction_has_effects')
                     ->select('hinteraction_has_effects.effect_id as effectid, effects.id, effects.name')
                     ->leftJoin('effects','effects.id','=','hinteraction_has_effects.effect_id')
                     ->where('hinteraction_has_effects.id', '=', $collection->hinteractionid)
                     ->get();

            

            $quries = DB::getQueryLog();
            dd($quries);


            // DB::enableQueryLog();
            // $hinteractions_has_effects =  $informations_plante->each(function ($collection, $iteration) {
            //     DB::table('hinteractions')
            //          ->select('hinteractions.herb_id, hinteraction_has_effects.*, effects.*')
            //          ->leftJoin('hinteractions', 'herb_id', '=', 'hinteraction_has_effects.herb_id')
            //          ->leftJoin('effects', 'effects.id', '=', 'hinteraction_has_effects.effect_id')
            //          ->where('herb_id', '=', $collection->herbid)
            //          ->get();

            // $quries = DB::getQueryLog();
            // dd($quries);


                    //  DB::table('hinteraction_has_effects')
                    //  ->select(DB::raw('hinteraction_has_effects.*, effects.*'))
                    //  ->leftJoin('effects', 'effects.id', '=', 'hinteraction_has_effects.effect_id')
                    //  ->where('herb_id', '=', $collection->herb_id)
                    //  ->get();
                
            });
            dd($hinteractions_has_effects);

            //dd($hinteractions_has_effects);
                     

            //dd($hinteractions_has_effects);

            //DB::enableQueryLog();
            //$hinteractions_has_effects = Hinteraction::with('effects');
            //$quries = DB::getQueryLog();
            //dd($quries);
            //dd($hinteractions_has_effects);

            //dd($hinteractions_has_effects);

            // $hinteractions_has_effects = Hinteraction::with(['effects'])->select('herbs.name as hname', 'herbs.sciname','hinteractions.*','targets.name as targetname', 'forces.name as force_name')
            // ->leftJoin('hinteractions', 'herbs.id', '=', 'herb_id')
            // ->leftJoin('forces', 'forces.id', '=', 'force_id')
            // ->leftJoin('targets', 'targets.id', '=', 'hinteractions.target_id')->where('herbs.id', $id)
            // ->get();
        
            //dd($informations_plante[0]->hinteractionid);

            
            
            

        return view("herbs/details",compact('informations_plante','hinteractions_has_effects'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
