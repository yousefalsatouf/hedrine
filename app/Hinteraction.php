<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinteraction extends Model
{


    // public function effects() {
    //     //DD: une hinteraction peut avoir plusieurs effets et un effet peut se trouver dans plusieurs hinteractions
    //     return $this->belongsToMany(Effect::class, 'hinteraction_has_effects');
    // }

    public function effects() {
        //DD: une hinteraction peut avoir plusieurs effets et un effet peut se trouver dans plusieurs hinteractions
        return $this->belongsToMany(Effect::class, 'hinteraction_has_effects');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function forces()
    {
        return $this->belongsTo(Force::class,'force_id');
    }

    public function references()
    {
        return $this->belongsToMany(Reference::class, 'hinteraction_has_references');
    }

    public function herbs()
    {
        return $this->belongsTo(Herb::class,'herb_id');

    }
    public function targets()
    {
        return $this->belongsTo(Target::class,'target_id','id');

    }

}
