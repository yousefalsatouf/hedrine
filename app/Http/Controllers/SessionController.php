<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function __construct() {

        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function destroy() {

    	auth()->logout();

     return redirect('/');
    }
}
