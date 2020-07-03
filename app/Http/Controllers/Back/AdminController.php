<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

use App\Herb;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\{Http\Request, Support\Facades\DB, Support\Facades\Mail};



class AdminController extends Controller
{
    protected $herb;

    public function __constuct(Herb $herb) {
        $this->middleware('admin');
      $this->herb = $herb;
    }
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
    public function herbs()
    {
        return view('alerts.index');
    }

    public function quickEdit(Request $request)
    {
        if ($request->temporary)
        {
            DB::table('temporary_data')->where('type_table', 'herbs')->where('id', $request->tid)->update(['new_value'=>$request->new]);

        }else{
            $forms = $request->forms;

            DB::table('herbs')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'sciname' => $request->sciname,
                    //'validated' => 1
                ]);

            DB::table('herb_has_forms')->where('herb_id', $request->id)->delete();
            foreach ($forms as $id)
            {
                DB::table('herb_has_forms')->insert(['herb_id' => $request->id, 'herb_form_id' => $id]);
            }
        }

        Alert::success("C'est Ok");

        return response()->json();
    }

    public function approve(Request $request) {

        //echo $request->id;
        if ($request->temporary)
        {
            $fields = ["name", "sciname"];
            foreach ($fields as $one)
            {
                if ($one === $request->title)
                    DB::table('herbs')->where('id', $request->typeid)->update([$one=>$request->value]);
            }
            DB::table('temporary_data')->where('type_table', 'herbs')->where('id', $request->id)->delete();

        }else
        {
            DB::table('herbs')->where('id', '=', $request->id)->update(['validated'=>1, "verified_by" => Auth::user()->name." ".Auth::user()->firstname]);
        }
        Alert::success('Ok !', 'Nouvelle plante approuvée avec succès');
        return response()->json(['id' => $request->id]);

    }

    public function refuse(Request $request)
    {
        $id = $request->id;
        $user = DB::table('users')->where('id', $request->id)->get();
        $email = DB::table('users')->where('id', $request->id)->pluck('email');
        $msg = $request->msg;

        if ($request->temporary)
        {
            DB::table('temporary_data')->where('type_table', 'herbs')->where('id', '=', $id)->delete();
        }else
        {
            //sending an email
            //event(new HerbRefuseEvent($user, $email, $msg));
            //Mail::to($email)->send(new HerbRefuse($user, $msg));
            DB::table('herbs')->where('id', $id)->delete();
        }

        Alert::success('Ok !', 'La plante a bien été refusée');

        return response()->json(['id'=>$id]);
    }
    public function modifs(Request $request) {

        $id = $request->id;
        $msg = $request->msg;
        $herb = DB::table('herbs')->where('id', '=', $id)->get();

        //$mail = $herb->user->email;
        //Mail::to($mail)->send(new HerbToUpdate($herb->user,$msg));

        if ($request->temporary)
        {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        }else
        {
            DB::table('herbs')->where('id', '=', $id)->update(['validated' => -1]);
        }

        Alert::success('Ok !', 'La plante doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $herb]);

    }
}
