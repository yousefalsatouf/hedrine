<?php

namespace App\Http\Controllers\Back;

use App\Herb;
use App\Http\Controllers\Controller;
use App\TemporaryData;

class TemporaryDataController extends Controller
{
    public function index()
    {
        $noValidHerbs = Herb::where('validated','<=', 0)->orderBy('created_at', 'desc')->paginate(3);
        $noValidHerbsModified = TemporaryData::where('type_table', 'herbs')->where('modified', 1)->orderBy('created_at', 'desc')->paginate(3);
        //dd($noValidHerbs);
        return view('alerts.index', compact('noValidHerbs', 'noValidHerbsModified'));
    }
}
