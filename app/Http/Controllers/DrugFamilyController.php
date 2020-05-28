<?php

namespace App\Http\Controllers;

use App\DrugFamily;
use Illuminate\Http\Request;

class DrugFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\DrugFamily  $drugFamily
     * @return \Illuminate\Http\Response
     */
    public function show(DrugFamily $drugFamily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DrugFamily  $drugFamily
     * @return \Illuminate\Http\Response
     */
    public function edit(DrugFamily $drugFamily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DrugFamily  $drugFamily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DrugFamily $drugFamily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DrugFamily  $drugFamily
     * @return \Illuminate\Http\Response
     */
    public function destroy(DrugFamily $drugFamily)
    {
        //
    }

    public function details($id)
    {
        $drugfamily = DrugFamily::findOrFail($id);
        
          //dd($drug);
        return view("drugFamily/details",compact('drugfamily'));
        
    }
}
