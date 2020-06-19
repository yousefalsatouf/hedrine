<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Herb;
use App\Messages;

class UserController extends Controller
{

    protected $herbs;
    protected $message;

    public function __construct( Herb $herbs, Message $message) {
        $this->herb = $herbs;
        $this->message = $message;
    }

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
     * Send message.
     *
     * @param  App\Http\Requests\MessageAd  $request
     * @return \Illuminate\Http\Response
     */
    public function message(MessageHerb $request)
    {
        $hbs = $this->herb->getById($request->id);

        if(auth()->check()) {
            $hbs->notify(new AdMessage($hbs, $request->message, auth()->user()->email));
            return response()->json(['info' => 'Votre message va être rapidement transmis.']);
        }

        $this->message->create([
            'texte' => $request->message,
            'email' => $request->email,
            'herb_id' => $hbs->id,
        ]);

        return response()->json(['info' => 'Votre message a été mémorisé et sera transmis après modération.']);
    }
}
