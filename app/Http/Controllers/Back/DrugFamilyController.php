<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\DrugFamily;
use App\Http\Controllers\Controller;
use App\Http\Requests\DrugRequest;
use App\Drug;
use App\Herb;
use App\Target;
use App\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class DrugFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drugsFamily = DB::table('drug_families')->paginate(10);

        return view('admin.drugsFamily.index', compact('drugsFamily'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        //dd($routes);
        return view('admin.drugsFamily.form_create_drug_family', compact('routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrugRequest $request)
    {
        $drugFamily = new DrugFamily;
        //dd($drug->name);
        $drugFamily->name = $request->name;
        $drugFamily->save();
        //dd($drugFamily->name);

        Alert::success('Ok !', 'Nouveau Drug Family ajouté avec succès');

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
    public function destroy(DrugFamily $drugFamily)
    {
        dd($drugFamily->id);

        $drugFamily->delete();
        return redirect(route('drugsFamily'));

    }

    public function alert(DrugFamily $drugFamily)
    {
        //dd($drugFamily);

        return view('admin.drugsFamily.destroy', ['drugFamily' => $drugFamily]);
    }

}
