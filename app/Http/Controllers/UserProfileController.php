<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herb;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $herbs = $this->getByUser($request->user());
        $herbsAttentsCount = $this->herbEntente($herbs);
        $herbToModifierCount = $this->herbToModif($herbs);
        return view('userprofile.index', compact('herbsAttentsCount','herbToModifierCount'));
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
     * Get a herb by user.
     *
     * @param \App\Models\User $user
     */
    public function getByUser($user)
    {
        return $user->herbs()->get();
    }

    public function allValidated(Request $request) {
        $herbs = $this->validated($request->user(),5);

        return view('userprofile.validated',compact('herbs'));
    }

    public function validated($user, $nbr) {
        return $user->herbs()->where('validated', 1)->paginate($nbr);
    }

    public function attenteHerb(Request $request)
    {
        $herbs = $this->attente($request->user(), 5);
        return view('userprofile.waiting', compact('herbs'));
    }

    public function modifierHerb(Request $request) {
        $herbs = $this->modifHerb($request->user(), 5);
        return view('userprofile.modifier', compact('herbs'));
    }

    public function modifHerb($user, $nbr)
    {
        return $user->herbs()->where('validated', 0)->paginate($nbr);
    }

    public function attente($user, $nbr)
    {
        return $user->herbs()->where('validated', -1)->paginate($nbr);
    }

     /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function herbEntente($herb)
    {
        return $herb->where('validated',0)->count();
    }
    public function herbToModif($herb)
    {
        return $herb->where('validated', -1)->count();
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
    public function update(Request $request, $id)
    {
        //
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
