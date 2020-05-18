<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Herb;
use App\Drug;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $posts = Post::all();
        $herbs = Herb::all();
        $drugs = Drug::all();
        return view('dashboard/dashboard',compact('posts', 'herbs','drugs'));
    }
}
