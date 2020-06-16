<?php

namespace App\Http\Controllers\Back;

use App\Events\AcceptNewUserEvent;
use App\Events\DenyNewUserEvent;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\{Http\Request, Notifications\DatabaseNotification, Support\Facades\DB, Support\Facades\Mail};
use RealRashid\SweetAlert\Facades\Alert;


class NotificationController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $user = $request->user();


        return view('notifications.index',compact('user'));
    }

    public function show_drugs(Request $request) {

        $user = $request->user();


        return view('notifications.index_drug',compact('user'));
    }

    public function show_targets(Request $request) {

        $user = $request->user();

        return view('notifications.index_target',compact('user'));
    }

    public function showNewUserRequests(Request $request)
    {
        $allNewUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->WhereNull('denied')->get();

        return view('notifications.newUserRequests',compact('allNewUsers'));
    }
    public function showSingleNewUserRequest($id)
    {
        $singleNewUser = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->where('id', '=', $id)->WhereNull('denied')->get();

        return view('notifications.newUserRequests',compact('singleNewUser'));
    }
    public function activateNewUser($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['is_active' => 1]);

        $username=null;
        $user = User::where('id', $id)->get();

        foreach ($user as $name)
            $username = $name->name." ".$name->firstname;
        //dd($username);
        event(new AcceptNewUserEvent($user[0]));
        Alert::success('Ok !', $username.' est activé');
        return redirect()->back();
    }

    // when email sent to admin by this function he can deny the new user ....
    public function denyUser($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['denied' => 1]);
       return view('mail.deniedMsg', compact('id'));
    }

    //send email and event ...
    public function SendDenyingMsg(Request $request, $id)
    {
        $msg = $request->get('msg');
        //dd($msg);
        $username = null;
        $user = User::where('id', $id)->get();

        foreach ($user as $name)
            $username = $name->name." ".$name->firstname;
        //event will pass here

        event(new DenyNewUserEvent($user[0], $msg));

        Alert::success('ok!', 'Message envoyé avec succes');
        return redirect('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatabaseNotification $notification)
    {
        $notification->markAsRead();
        if($request->user()->unreadNotifications->isEmpty()) {
            return redirect()->route('home');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
