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

    public function drugEdit(Request $request)
    {
        if ($request->temporary)
        {
            DB::table('temporary_data')->where('type_table', 'drugs')->where('id', $request->tid)->update(['new_value'=>$request->new]);

        }else{
            $forms = $request->forms;

            DB::table('drugs')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                ]);

            DB::table('drugs')->where('drug_families_id', $request->id)->delete();
            foreach ($forms as $id)
            {
                DB::table('drugs')->insert(['herb_id' => $request->id, 'drug_families_id' => $id]);
            }
        }

        Alert::success("C'est Ok");

        return response()->json();
    }

    public function targetEdit(Request $request)
    {
        if ($request->temporary)
        {
            DB::table('temporary_data')->where('type_table', 'targets')->where('id', $request->tid)->update(['new_value'=>$request->new]);

        }else{
            $forms = $request->forms;

            DB::table('targets')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([

                    'name' => $request->name,
                    'longname' => $request->long_name,
                    'notes' => $request->notes,
                ]);


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

    public function approve_drug(Request $request) {

        //echo $request->id;
        if ($request->temporary)
        {
            $fields = ["name"];
            foreach ($fields as $one)
            {
                if ($one === $request->title)
                    DB::table('drugs')->where('id', $request->typeid)->update([$one=>$request->value]);
            }
            DB::table('temporary_data')->where('type_table', 'drugs')->where('id', $request->id)->delete();

        }else
        {
            DB::table('drugs')->where('id', '=', $request->id)->update(['validated'=>1, "verified_by" => Auth::user()->name." ".Auth::user()->firstname]);
        }
        Alert::success('Ok !', 'Nouveau DCI approuvé avec succès');
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

    public function refuse_drug(Request $request)
    {
        $id = $request->id;
        $user = DB::table('users')->where('id', $request->id)->get();
        $email = DB::table('users')->where('id', $request->id)->pluck('email');

        $msg = $request->msg;

        if ($request->temporary)
        {
            DB::table('temporary_data')->where('type_table', 'drugs')->where('id', '=', $id)->delete();
        }else
        {
            //sending an email
            //event(new HerbRefuseEvent($user, $email, $msg));
            //Mail::to($email)->send(new HerbRefuse($user, $msg));
            DB::table('drugs')->where('id', $id)->delete();
        }

        Alert::success('Ok !', 'Le DCI a bien été refusé');

        return response()->json(['id'=>$id]);
    }
    public function refuse_target(Request $request)
    {
        $id = $request->id;
        $user = DB::table('users')->where('id', $request->id)->get();
        $email = DB::table('users')->where('id', $request->id)->pluck('email');

        $msg = $request->msg;

        if ($request->temporary)
        {
            DB::table('temporary_data')->where('type_table', 'targets')->where('id', '=', $id)->delete();
        }else
        {
            //sending an email
            //event(new HerbRefuseEvent($user, $email, $msg));
            //Mail::to($email)->send(new HerbRefuse($user, $msg));
            DB::table('targets')->where('id', $id)->delete();
        }

        Alert::success('Ok !', 'Le Target a bien été refusé');

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
    public function modifs_drug(Request $request) {

        $id = $request->id;
        $msg = $request->msg;
        $drug = DB::table('drugs')->where('id', '=', $id)->get();


        //$mail = $herb->user->email;
        //Mail::to($mail)->send(new HerbToUpdate($herb->user,$msg));

        if ($request->temporary)
        {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        }else
        {
            DB::table('drugs')->where('id', '=', $id)->update(['validated' => -1]);
        }

        Alert::success('Ok !', 'Le dci doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $drug]);

    }
    public function modifs_target(Request $request) {

        $id = $request->id;
        $msg = $request->msg;
        $target = DB::table('targets')->where('id', '=', $id)->get();
        dd($target);
        //$mail = $herb->user->email;
        //Mail::to($mail)->send(new HerbToUpdate($herb->user,$msg));

        if ($request->temporary)
        {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        }else
        {
            DB::table('targets')->where('id', '=', $id)->update(['validated' => -1]);
        }

        Alert::success('Ok !', 'Le Target doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $target]);

    }
}
