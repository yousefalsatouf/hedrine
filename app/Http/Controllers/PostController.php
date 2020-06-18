<?php

namespace App\Http\Controllers;

use App\Post;
use App\Herb;
use App\Drug;
use App\Target;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
//DD 2-05-20 permet d'utiliser les sweet-alert, si pas présent, pas d'alerte
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('layouts/master_dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_form()
    {

        return view('admin/postes/form_add_post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $herbs = Herb::all();
        $drugs = Drug::all();
        $targets = Target::all();
        $posts = Post::all();
        $user = Auth::user();
        $post = new Post;
        $post->user_id = $user->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->important = $request->important;
        $post->save();


         Alert::success('Ok !', 'Nouveau poste ajouté avec succès');


        return redirect()->route('posts.show_form')->withSuccessMessage('Ajouter avec succes');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
