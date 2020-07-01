<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\TemporaryData;

class TemporaryDataController extends Controller
{
    public function index()
    {
        $noValidHerbs = TemporaryData::where('type_table', 'herbs')->where('modified', 0)->paginate(3);
        $noValidHerbsModified = TemporaryData::where('type_table', 'herbs')->where('modified', 1)->paginate(3);

        return view('alerts.index', compact('noValidHerbs', 'noValidHerbsModified'));
    }
}
