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
use App\DrugFamily;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewDrug as NewDrugNotification;


class PendingUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allNewUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->WhereNull('denied')->get();

        return view('admin.pendingUsers.index',compact('allNewUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.pendingUsers.form_add_pending_user');
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
    
}
