<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinteraction extends Model
{

    public function effects() {
        //DD: une hinteraction peut avoir plusieurs effets et un effet peut se trouver dans plusieurs hinteractions 
        return $this->belongsToMany(Effect::class, 'hinteraction_has_effects'); 
    }

    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function forces()
    {
        return $this->belongsTo(forces::class);
    }

    public function references()
    {
        return $this->belongsToMany(references::class);
    }

    public function herbs()
    {
        return $this->belongsToMany(herbs::class);
    }
}
