<?php

namespace App\Http\Controllers;

use App\Post;
use App\Target;
use App\TargetType;
use App\Herb;
use App\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $targets = Target::all();
        $posts  = Post::all();
        $herbs = Herb::all();
        $drugs = Drug::all();

        $targets = Target::with('targetype')->get();
        //these are for the filter chars search
        //dd($targets);
        $targetsChar=array();
        foreach (range('A', 'Z') as $char)
        {
            foreach ($targets as $n)
            {
                if ($n->name[0] === $char)
                {
                    $targetsChar[]=$char;
                }
            }
        }
        $resultChars = array_unique($targetsChar);
        in_array('A', $resultChars)?$disable=null:$disable='disabled-char';

        return view('targets/index',compact('targets','posts','drugs','herbs', 'targetsChar', 'resultChars', 'disable'));
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

        $target =  Target::orderBy('name')->where('name', 'LIKE', $char.'%')->get();
        //dd($target);
        //dd($char);
        //this one used to add class on active char clicked
        $targetCharClicked=Target::where('name', 'LIKE', $char.'%')->get();
        $targetChar= $char;
        //dd($herbChar);
        //here just for test ...
        //dd($herbs);
        $targets = Target::with('targetype')->get();
        $targetsChars=array();
        foreach (range('A', 'Z') as $char)
        {
            foreach ($targets as $n)
            {
                if ($n->name[0] === $char)
                {
                    $targetsChars[]=$char;
                }
            }
        }
        $resultChars = array_unique($targetsChars);
        //dd($resultChars);
        in_array('A', $resultChars)?$disable=null:$disable='disabled-char';

        return view('targets/index', compact('target', 'targetChar', 'disable', 'resultChars', 'lastHerb', 'numberOfTimes_herbForms'));
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
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function show(Target $target)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function edit(Target $target)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Target $target)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function destroy(Target $target)
    {
        //
    }
    public function details($id)
    {
        $target = Target::with('dinteractions.drugs','dinteractions.effects','dinteractions.targets',
                                'hinteractions.drugs','hinteractions.effects','hinteractions.targets')->findOrFail($id);

          //dd($drug);
        return view("targets/details",compact('target'));

    }

    //advanced search starts here

    public function oneToOne(Request $request)
    {
        $result =  DB::table('targets')
            ->join('hinteractions', 'targets.id', '=',  'hinteractions.target_id')
            ->join('dinteractions',  'targets.id', '=', 'dinteractions.target_id')
            ->where('hinteractions.target_id', '=', 'dinteractions.target_id')
            ->get();

        return $result;

    }
}
