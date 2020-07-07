<?php

namespace App\Http\Controllers\Back;

use App\DataTables\PostsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Post;
use App\User;
use App\Notifications\NewHerb as NewHerbNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $posts = Post::all();

        return view('admin.postes.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.postes.form_add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->important? $post->important = 1 : $post->important = 0;
        $post->save();
        Alert::success('Ok !', 'Nouveau poste ajouté avec succès');



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
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.postes.update', ['post' => $post ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::findOrFail($id);
        dd($post);
        $post->update($request->all());

        Alert::success('Ok !', 'Votre poste a étè mis à jour avec succès');

        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('post.index'));

    }

    public function alert(Post $post) {

        return view('admin.postes.destroy', ['post' => $post]);
    }

    public function validpost($id){
        $postTovalid = Post::findOrFail($id);
        return view('admin.postes.valid_form',$postTovalid);
    }

    public function showSingle($id)
    {
        dd($id);
    }

    public function details($id)
    {

        $post = DB::table('posts')->where('id', $id)->get();
        $user = User::whereId($post[0]->user_id)->first();
        $username = $user->name." ".$user->firstname;

        return view('admin.postes.show',compact('post', 'username'));
    }
}
