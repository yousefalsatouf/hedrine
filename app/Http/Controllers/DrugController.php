<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Herb;
use App\Post;
use App\DrugFamily;
use App\Target;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$drugs = Drug::all();*/
        $posts = Post::all();
        $herbs = Herb::all();
        $targets = Target::all();
        $drugs = Drug::all();

        //retourne tous les médicaments et leur drugs families pour la vue drugs
    
        
        $drugs_and_families = DB::table('drugs')
            
            ->leftJoin('drug_families', 'drug_families.id', '=', 'drugs.drug_families_id')
            ->get();

        /*dd($drugs_and_families);*/

        
       return view('drugs/index',compact('drugs_and_families','posts','drugs','targets','herbs'));
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
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function show(Drug $drug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function edit(Drug $drug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drug $drug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drug $drug)
    {
        //
    }
}
