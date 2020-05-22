<?php

namespace App\Http\Controllers\Back;

use App\DataTables\PostsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Herb;
use App\Target;
use App\Drug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$drugs = Drug::all();*/
        $posts = Post::all();
        $herbs = Herb::all();
        $targets = Target::all();
        $drugs = Drug::all();
        $users = User::all();

        //retourne tous les médicaments et leur drugs families pour la vue drugs
       
        $drugs_and_families = DB::table('drugs')
            ->select('drugs.id as idDrug','drugs.name as dname','drug_families.*', 'users.name')
            ->leftJoin('drug_families', 'drug_families.id', '=', 'drugs.drug_families_id')
            ->leftJoin('users', 'users.id', '=', 'drugs.user_id')
            ->get();
            dd($drugs);
    
        
        // $drugs_and_families = DB::table('drugs')
            
        //     ->leftJoin('drug_families', 'drug_families.id', '=', 'drugs.drug_families_id')
        //     ->get();

        // dd($drugs_and_families);

        
       return view('admin.drugs.index',compact('drugs_and_families','posts','drugs','targets','herbs'));
    }
}
