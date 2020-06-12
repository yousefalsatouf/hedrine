<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\HerbRequest;
use App\Drug;
use App\Herb;
use App\Target;
use App\User;
use App\Role;
use App\HerbForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewHerb as NewHerbNotification;
use Illuminate\Support\Facades\Mail;



class HerbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numberOfTimes_herbForms = 0;
        $lastHerb = 0;


        return view('admin.herbs.index', compact('numberOfTimes_herbForms','lastHerb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.herbs.form_add_herb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HerbRequest $request)
    {
        $herb = new Herb;


        $herb->user_id = Auth::user()->id;
        $herb->name = $request->name;
        $herb->sciname = $request->sciname;


        $herb->save();
        $herb->herb_forms()->sync($request->forms, false);

        Alert::success('Ok !', 'Nouvelle plante ajouté avec succès');

        $adminusers = User::with('roles')->where('role_id','1')->get();
        //dd($adminusers);
        foreach($adminusers as $adm) {
            //Mail::to($adm)->send(new NewHerb($herb, $user));
            $adm->notify(new NewHerbNotification($herb));

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
    public function edit(Herb $herb)
    {

        return view('admin.herbs.form_add_herb', ['herb' => $herb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Herb $herb)
    {
        $herb->name = $request->name;
        $herb->sciname = $request->sciname;

        $herb->save();
        $herb->herb_forms()->sync($request->forms);
        Alert::success('Ok !', 'Votre plante a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herb $herb)
    {
       $herb->delete();

        return redirect(route('herb.index'));

    }

    public function alert(Herb $herb) {

        return view('admin.herbs.destroy', ['herb' => $herb]);
    }

    public function details($id)
    {
        $herb = Herb::findOrFail($id);

        return view('admin.herbs.show',$herb);
    }
}
