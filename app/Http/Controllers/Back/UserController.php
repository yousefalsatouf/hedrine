<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Herb;
use App\Messages;
use App\User;
use App\Role;
use App\Http\Requests\UserRequest;


use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    // protected $herbs;
    // protected $message;

    // public function __construct( Herb $herbs, Message $message) {
    //     $this->herb = $herbs;
    //     $this->message = $message;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.form_add_user', compact('roles'));
    }

    /**
     * Send message.

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User;

        $user->user_id = Auth::user()->id;
        $user->name = $request->name;
        $user->firstname = $request->firstname;
        $user->team = $request->team;
        $user->tel1 = $request->tel1;
        $user->tel2 = $request->tel2;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password;
        $user->remember_token = $request->remember_token;
        $user->role_id = $request->role_id;
        $user->save();
        Alert::success('Ok !', 'Nouveau user ajouté avec succès');

        return back();
    }

    public function unsubscribe($id)
    {
        dd('hh');
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
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.form_add_user',['user' => $user ], compact( 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        Alert::success('Ok !', 'Votre user a étè mis à jour avec succès');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'));

    }

    public function alert(User $user) {

        return view('admin.users.destroy', ['user' => $user]);
    }

    public function details($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show',$user);
    }


    // /**
    //  * Send message.
    //  *
    //  * @param  App\Http\Requests\MessageAd  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function message(MessageHerb $request)
    // {
    //     $hbs = $this->herb->getById($request->id);

    //     if(auth()->check()) {
    //         $hbs->notify(new AdMessage($hbs, $request->message, auth()->user()->email));
    //         return response()->json(['info' => 'Votre message va être rapidement transmis.']);
    //     }

    //     $this->message->create([
    //         'texte' => $request->message,
    //         'email' => $request->email,
    //         'herb_id' => $hbs->id,
    //     ]);

    //     return response()->json(['info' => 'Votre message a été mémorisé et sera transmis après modération.']);
    // }

}
