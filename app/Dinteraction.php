<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dinteraction extends Model
{
    public function effects() {
        //DD: une hinteraction peut avoir plusieurs effets et un effet peut se trouver dans plusieurs hinteractions
        return $this->belongsToMany(Effect::class, 'dinteraction_has_effects')->withTimestamps();
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
        return $this->belongsToMany(Reference::class, 'dinteraction_has_references')->withTimestamps();
    }


    public function drugs()
    {
        return $this->belongsTo(Drug::class,'drug_id');

    }
    public function targets()
    {
        return $this->belongsTo(Target::class,'target_id');

    }
}
