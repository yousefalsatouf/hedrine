<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Herb;
use App\Notifications\ { HerbApprove, HerbRefuse };
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\MessageRefuse as MessageRefuseRequest;
use Symfony\Component\VarDumper\Cloner\Data;


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
    public function herbs()
    {
        return view('alerts.index');
    }

    public function approved($herb){
        $herb->validated = true;
        $herb->save();
    }
    public function delete($herb){
        $herb->delete();
    }
    public function modifTodo($herb){
        $herb->delete();
    }

    public function quickEdit(Request $request)
    {
        $data = Herb::where('validated',false)->where('id', $request->id)->get();
        $data->name = $request->name;
        $data->sciname = $request->sciname;
        $data->save();

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

    public function approve(Herb $herb) {
        $this->approved($herb);
        Alert::success('Ok !', 'Nouvelle plante approuvée avec succès');
        return response()->json(['id' => $herb->id]);

    }
    public function refuse(MessageRefuseRequest $request) {

        $herb = $this->getById($request->id);
        $herb->notify( New HerbRefuse($request->message));
        $this->delete($herb);

        return response()->json(['id' => $herb->id]);

    }
    public function modifs(MessageRefuseRequest $request) {

        $herb = $this->getById($request->id);
        $herb->notify( New HerbRefuse($request->message));
        $this->delete($herb);

        return response()->json(['id' => $herb->id]);

    }
}
