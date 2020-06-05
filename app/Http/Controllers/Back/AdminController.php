<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request) {

        $notifications = $request->user()->unreadNotifications()->get();
        $newHerbs = 0;

        foreach($notifications as $notification) {
            if($notification->type === 'App\Notifications\NewHerb') {
                ++$newHerbs;
            }
        }

        return view('dashboard/dashboard',compact('notifications','newHerbs'));
    }
}
