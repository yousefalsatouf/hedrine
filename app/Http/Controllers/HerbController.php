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
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
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
        //pour la notification solution temporaire
        //dd($herb_forms);
        $herbs = Herb::all();
        $herb =  Herb::orderBy('name')->where('name', 'LIKE', 'A%')->get();
        $herbsChar=array();
        foreach (range('A', 'Z') as $char)
        {
            foreach ($herbs as $n)
            {
                if ($n->name[0] === $char)
                {
                    $herbsChar[]=$char;
                }
            }
        }
        $resultChars = array_unique($herbsChar);
        //dd($resultChars);
        //on retourne le résultat dans une view nommée index, la vue se trouve dans la dossier herbs
        return view('herbs/index', compact('numberOfTimes_herbForms', 'lastHerb', 'resultChars', 'herb'));
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

    //create function to get data by char
    //using this function i can get the char via a request and return data according the need ...
    /**
     * @param  string  $char
     * @return View
     */

    public function filterByChar($char)
    {
        $numberOfTimes_herbForms = 0;
        $lastHerb = 0;
        $herb =  Herb::orderBy('name')->where('name', 'LIKE', $char.'%')->get();
        //this one used to add class on active char clicked
        $herbCharClicked=Herb::where('name', 'LIKE', $char.'%')->get();
        $herbChar= $char;
        //dd($herbChar);
        //here just for test ...
        //dd($herbs);

        return view('herbs/index', compact('herb', 'numberOfTimes_herbForms', 'lastHerb', 'herbChar'));
    }

    public function details($id)
    {
        //DD je récupère les informations de la plante (pas les effects et pas les références)

        $herb = Herb::with('hinteractions.herbs','hinteractions.effects','hinteractions.targets')->findOrFail($id);

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
