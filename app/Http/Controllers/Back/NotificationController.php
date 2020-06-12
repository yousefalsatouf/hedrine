<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\{Http\Request, Notifications\DatabaseNotification, Support\Facades\DB};


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
        $allNewUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->get();

        return view('notifications.newUserRequests',compact('allNewUsers'));
    }
    public function showSingleNewUserRequest($id)
    {
        $singleNewUser = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->where('id', '=', $id)->get();

        return view('notifications.newUserRequests',compact('singleNewUser'));
    }
    public function activateNewUser($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['is_active' => 1]);

        $username=null;
        $user = DB::table('users')->where('id', $id)->get();

        foreach ($user as $name)
            $username = $name->name." ".$name->firstname;

        //dd($username);

<<<<<<< HEAD
        return redirect()->back()->with('msg', $username." is activated now");
=======
        return redirect()->back()->with('msg', $username." activated now");
>>>>>>> 03d56d0a261aed7249746bcee0be5827fd7fb730
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
