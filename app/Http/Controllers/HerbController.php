<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Herb;
use App\HerbHasForm;
use App\Drug;
use App\Target;

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
        $posts = Post::all();
        $drugs = Drug::all();
        $targets = Target::all();
        $herbs = Herb::with('herb_forms')->get();

        /* foreach ($herbs as $herb) 
        {
            echo "<pre>";
            echo $herb->name;
            echo $herb->sciname;
            echo $herb->herb_forms;
            echo "</pre>";
        } */

    

        /* dd($herbs); */
    
        
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
