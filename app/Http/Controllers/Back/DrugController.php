<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\DrugRequest;
use App\Drug;
use App\Herb; 
use App\Target;
use App\Route;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewDrug as NewDrugNotification;


class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.drugs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        return view('admin.drugs.form_add_drug', compact('routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrugRequest $request)
    {
        $drug = new Drug;

        $drug->user_id = Auth::user()->id; 
        $drug->name = $request->name;
        $drug->drug_families_id = $request->drug_families_id;
        $drug->route_id = $request->route_id;
        $drug->atc_level_4s_id = $request->atc_level_4s_id;
        $drug->save();
        Alert::success('Ok !', 'Nouveau DCI ajouté avec succès');

        $adminusers = User::with('roles')->where('role_id','1')->get();
        //dd($adminusers);
        foreach($adminusers as $adm) {
            //Mail::to($adm)->send(new NewHerb($herb, $user));
            $adm->notify(new NewdrugNotification($drug));

        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Drug $drug)
    {
        $routes = Route::all();
        return view('admin.drugs.form_add_drug',['drug' => $drug ], compact('routes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drug $drug)
    {
        $drug->update($request->all());
        Alert::success('Ok !', 'Votre DCI a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drug $drug)
    {
        $drug->delete();
        return redirect(route('drug.index'));

    }

    public function alert(Drug $drug) {

        return view('admin.drugs.destroy', ['drug' => $drug]);
    }

    public function details($id)
    {
        $drug = Drug::findOrFail($id);

        return view('admin.drugs.show',$drug);
    }
}
