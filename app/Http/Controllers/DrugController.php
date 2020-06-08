<?php

namespace App\Http\Controllers;

use App\Drug;
use App\Herb;
use App\Post;
use App\DrugFamily;
use App\Target;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // code added for the filter search chars
        $drugs = Drug::all();
        $drugsChar=array();
        foreach (range('A', 'Z') as $char)
        {
            foreach ($drugs as $n)
            {
                if ($n->name[0] === $char)
                {
                    $drugsChar[]=$char;
                }
            }
        }
        $resultChars = array_unique($drugsChar);

       return view('drugs/index', compact('drugs', 'resultChars'));
    }

    //create function to get data by char
    //using this function i can get the char via a request and return data according the need ...
    /**
     * @param  string  $char
     * @return View
     */

    public function filterByChar($char)
    {
        //dd($char);
        $drug =  Drug::orderBy('name')->where('name', 'LIKE', $char.'%')->get();
        //dd($drug);
        //this one used to add class on active char clicked
        $drugCharClicked = Drug::where('name', 'LIKE', $char.'%')->get();
        //dd($drugCharClicked);
        $drugChar= $char;
        //dd($drugChar);

        return view('drugs/index', compact('drug', 'drugChar'));
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

    public function details($id)
    {
        $drug = Drug::with('dinteractions.drugs','dinteractions.effects','dinteractions.targets')->findOrFail($id);

          //dd($drug);
        return view("drugs/details",compact('drug'));

    }
}
