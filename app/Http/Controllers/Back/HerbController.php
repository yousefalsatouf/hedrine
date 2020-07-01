<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\HerbRequest;
use App\Herb;
use App\Target;
use App\TemporaryData;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\NewHerb as NewHerbNotification;



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
        $targets = Target::all();
        return view('admin.herbs.form_add_herb', compact('targets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HerbRequest $request)
    {
        $editor = Auth::user()->role_id === 3;
        $boss = Auth::user()->role_id <= 2;

        if ($editor || ($boss && !$request->validated))
        {
            $herb = new Herb;
            $herb->name = $request->name;
            $herb->sciname = $request->sciname;
            $herb->user_id = Auth::id();
            $herb->save();
            $herb->herb_forms()->sync($request->forms);

            //dd($request->forms);
            //$old = ["name" => $herb->name, "sciname" => $herb->sciname, "herb_forms" => json_encode($request->forms, JSON_NUMERIC_CHECK)];
            $new = ["name" => $herb->name, "sciname" => $herb->sciname, "herb_forms" => json_encode($request->forms, JSON_NUMERIC_CHECK)];
            //dd($data);
            foreach ($new as $key => $value)
            {
                $temporary = new TemporaryData;
                $temporary->type_id = $herb->id;
                $temporary->type_table = "herbs";
                $temporary->type_field = $key;
                $temporary->new_value = $value;
                $temporary->modified = false;
                $temporary->author = Auth::user()->name." ".Auth::user()->firstname;
                $temporary->author_id = Auth::id();
                $temporary->save();
            }

            $herb->delete();

            Alert::success('Cool !', 'Votre plante est en cours de vérifier avec l\'administrateur');
        }
        elseif($boss && $request->validated)
        {
            //dd($request->forms);
            $herb = new Herb;
            $herb->user_id = Auth::user()->id;
            $herb->name = $request->name;
            $herb->sciname = $request->sciname;
            $herb->validated = 1;
            $herb->verified_by = Auth::user()->name." ".Auth::user()->firstname;
            $herb->save();
            $herb->herb_forms()->sync($request->forms);

            Alert::success('Ok !', 'Nouvelle plante ajouté avec succès');

            $adminusers = User::with('roles')->where('role_id', '1')->get();
            //dd($adminusers);
            foreach ($adminusers as $adm) {
                //Mail::to($adm)->send(new NewHerb($herb, $user));
                $adm->notify(new NewHerbNotification($herb));

            }
        }
        return redirect('/admin/herb');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return view('herbs.show', compact('herb'));
    }
    public function showHerb(Herb $herb) {

        return view('herbs.show', compact('herb'));
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
        $editor = Auth::user()->role_id === 3;
        $boss = Auth::user()->role_id <= 2;

        if ($editor || ($boss && !$request->validated))
        {

            $original = ["name" => $herb->name, "sciname" => $herb->sciname];
            $new = ["name" => $request->name, "sciname" => $request->sciname];
            $data = array_diff($new, $original);

            foreach ($data as $key => $value)
            {
                $temporary = new TemporaryData;
                $temporary->type_id = $herb->id;
                $temporary->type_table = "herbs";
                $temporary->type_field = $key;
                if (!in_array($value, $original))
                {
                    $temporary->original_value = $original[$key];
                    $temporary->new_value = $value;
                }
                $temporary->modified = true;
                $temporary->author = Auth::user()->name." ".Auth::user()->firstname;
                $temporary->author_id = Auth::id();
                $temporary->save();
            }

            Alert::success('Cool !', 'Votre plante est en cours de vérifier avec l\'administrateur');
        }
        elseif($boss && $request->validated)
        {
            $herb->name = $request->name;
            $herb->sciname = $request->sciname;
            $herb->validated = 1;
            $herb->verified_by = Auth::user()->name." ".Auth::user()->firstname;
            $herb->save();
            $herb->herb_forms()->sync($request->forms);

            Alert::success('Ok !', 'Votre plante a étè mis à jour avec succès');
        }

        return redirect('admin/herb');

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
