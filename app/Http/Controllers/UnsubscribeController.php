<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnsubscribeController extends Controller
{
    //
    public function unsubscribe()
    {
        $id = Auth::id();
        User::findOrFail($id)->delete();

        return redirect('/');
    }
}
