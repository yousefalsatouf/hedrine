<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
	protected $fillable = [
        'id','name'
    ];
    //DD: une hinteraction peut avoir plusieurs effets et un effet peut se trouver dans plusieurs hinteractions
    public function hinteractions() { 
        return $this->belongsToMany(Hinteraction::class, 'hinteraction_has_effects'); 
    }


    public function dinteractions()
    {
        return $this->belongsToMany(dinteractions::class);
    }
}
