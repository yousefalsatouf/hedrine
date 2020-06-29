<?php

namespace App\Http\Controllers\Back;

use App\Events\HerbRefuseEvent;
use App\Http\Controllers\Controller;

use App\Herb;
use App\TemporaryData;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\{
    Http\Request,
    Support\Facades\DB
};



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
        $herb = Herb::where('validated', '!=', 1)->where('id', $request->id)->get();
        //dd($herb);

        if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2)
        {

            DB::table('herbs')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'sciname' => $request->sciname,
                    //'validated' => 1
                ]);
            Alert::success("C'est Ok");
        }
        return response()->json($herb);
    }

    public function approve(Request $request) {

        //echo $request->id;
        DB::table('herbs')->where('id', '=', $request->id)->update(['validated'=>1, "verified_by" => Auth::user()->name." ".Auth::user()->firstname]);
        TemporaryData::where('type_id', $request->id)->where('type', 'herbs')->delete();
        Alert::success('Ok !', 'Nouvelle plante approuvée avec succès');
        return response()->json(['id' => $request->id]);

    }
    public function refuse(Request $request)
    {
        $id = $request->id;
        $msg = $request->msg;

        $herb = DB::table('herbs')->where('id', '=', $id)->get();
        TemporaryData::where('type_id', $request->id)->where('type', 'herbs')->delete();

        event(new HerbRefuseEvent($herb, $msg));
        //$mail = $herb->user->email;
        //Mail::to($mail)->send(new HerbRefuse($herb->user, $msg));

        DB::table('herbs')->where('id', '=', $id)->delete();

        Alert::success('Ok !', 'La plante a bien été refusée');

        return response()->json(['id' => $herb]);
    }
    public function modifs(Request $request) {

        $id = $request->id;
        $msg = $request->msg;
        $herb = DB::table('herbs')->where('id', '=', $id)->get();

        //$mail = $herb->user->email;
        //Mail::to($mail)->send(new HerbToUpdate($herb->user,$msg));

        DB::table('herbs')->where('id', '=', $id)->update(['validated' => -1]);

        Alert::success('Ok !', 'La plante doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $herb]);

    }
}
