<?php

namespace App\Http\Controllers\Back;

use App\Herb;
use App\Drug;
use App\Target;
use App\Hinteraction;
use App\Dinteraction;
use App\Reference;
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

    public function index_hinteraction_targets() {
        $noValidHinteractionTargets = Hinteraction::where('validated','<=', 0)->orderBy('created_at', 'desc')->paginate(3);
        $noValidHinteractionTargetsModified = TemporaryData::where('type_table', 'hinteractions')->where('modified', 1)->orderBy('created_at', 'desc')->paginate(3);

        return view('alerts.index_hinteraction_target', compact('noValidHinteractionTargets','noValidHinteractionTargetsModified'));

    }
    public function index_dinteraction_targets() {
        $noValidDinteractionTargets = Dinteraction::where('validated','<=', 0)->orderBy('created_at', 'desc')->paginate(3);
        $noValidDinteractionTargetsModified = TemporaryData::where('type_table', 'dinteractions')->where('modified', 1)->orderBy('created_at', 'desc')->paginate(3);

        return view('alerts.index_dinteraction_target', compact('noValidDinteractionTargets','noValidDinteractionTargetsModified'));

    }
    public function index_references() {
        $noValidReferences = Reference::where('validated','<=', 0)->orderBy('created_at', 'desc')->paginate(3);
        $noValidReferenceModified = TemporaryData::where('type_table', 'references')->where('modified', 1)->orderBy('created_at', 'desc')->paginate(3);

        return view('alerts.index_reference', compact('noValidReferences','noValidReferenceModified'));

    }
}
