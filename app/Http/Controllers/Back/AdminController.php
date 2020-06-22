<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Herb;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\HerbRefuse;
use App\Mail\HerbToUpdate;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\MessageRefuse as MessageRefuseRequest;
use Symfony\Component\VarDumper\Cloner\Data;


class AdminController extends Controller
{
    protected $herb;

    public function __constuct(Herb $herb) {
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

    public function approved($herb){
        $herb->validated = 1;
        $herb->save();
    }
    public function delete($herb){
        $herb->delete();
    }
    public function delValue($herb){
        $herb->validated = -1;
        $herb->save();
    }
    public function modifTodo($herb){
        $herb->validated = -1;
        $herb->save();
    }

    public function quickEdit(Request $request)
    {
        //echo $request->id;
        /*$data = Herb::where('validated',false)->where('id', $request->id)->get();
        //echo $data;
        $data->name = $request->name;
        $data->sciname = $request->sciname;
        $data->save();*/


        if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2)
        {
            DB::table('herbs')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'sciname' => $request->sciname,
                    //'validated' => 1
                ]);
        }
        else
        {
            DB::table('herbs')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'sciname' => $request->sciname,
                    //'validated' => -1
                ]);
        }
        $data = Herb::where('validated', '!=', 1)->where('id', $request->id)->get();
        Alert::success("C'est Ok");
        return response()->json($data);
    }

    /**
     * Get an ad by id.
     *
     * @param integer $id
     */
    public function getById($id)
    {
        return Herb::findOrFail($id);
    }
    public function getByIdBy($id)
    {
        return Herb::findOrFail($id);
    }



    public function approve(Herb $herb) {
        $this->approved($herb);
        Alert::success('Ok !', 'Nouvelle plante approuvée avec succès');
        return response()->json(['id' => $herb->id]);

    }
    public function refuse(MessageRefuseRequest $request)
    {
        $herb = $this->getById($request->id);

        $msg = $request->get('message');

        $username = null;

        $mail = $herb->user->email;

        Mail::to($mail)->send(new HerbRefuse($herb->user,$msg));

        $this->delete($herb);
        Alert::success('Ok !', 'La plante a bien été refusée et le rédacteur va être notifié.');
        return response()->json(['id' => $herb->id]);

    }
    public function modifs(MessageRefuseRequest $request) {

        $herb = $this->getById($request->id);
         Alert($herb->user);
        $msg = $request->get('message');

        $username = null;

        $mail = $herb->user->email;

        Mail::to($mail)->send(new HerbToUpdate($herb->user,$msg));

        $this->modifTodo($herb);
        Alert::success('Ok !', 'La plante doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $herb->id]);

    }
}
