<?php

namespace App\Http\Controllers\Back;

use App\Herb;
use App\Drug;
use App\Target;
use App\Http\Controllers\Controller;
use App\TemporaryData;

class TemporaryDataController extends Controller
{
    public function index()
    {
        $noValidHerbs = Herb::where('validated','<=', 0)->orderBy('created_at', 'desc')->paginate(3);
        $noValidHerbsModified = TemporaryData::where('type_table', 'herbs')->where('modified', 1)->orderBy('created_at', 'desc')->paginate(3);

        //dd($noValidHerbs);
        return view('alerts.index', compact('noValidHerbs','noValidHerbsModified'));
    }

    public function index_drugs() {
        $noValidDrugs = Drug::where('validated','<=', 0)->orderBy('created_at', 'desc')->paginate(3);
        $noValidDrugsModified = TemporaryData::where('type_table', 'drugs')->where('modified', 1)->orderBy('created_at', 'desc')->paginate(3);

        return view('alerts.index_drug', compact('noValidDrugs','noValidDrugsModified'));

    }
    public function index_targets() {
        $noValidTargeted = Target::where('validated','<=', 0)->orderBy('created_at', 'desc')->paginate(3);
        $noValidTargetsModified = TemporaryData::where('type_table', 'targets')->where('modified', 1)->orderBy('created_at', 'desc')->paginate(3);

        return view('alerts.index_target', compact('noValidTargeted','noValidTargetsModified'));

    }
}
