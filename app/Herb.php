<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function herb_forms() { 
        //DD herb_has_forms c'est le nom de la table pivot
        return $this->belongsToMany(HerbForm::class, 'herb_has_forms'); 
    }

    public function targets()
    {
        return $this->belongsToMany(Target::class);
    }

    public function dinteractions()
    {
        return $this->belongsToMany(Dinteraction::class);
    }

    public function hinteractions()
    {
        return $this->hasMany(Hinteraction::class);
    }
    //Thierry Tester


}
