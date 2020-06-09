<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{
    protected $fillable = ['name', 'sciname', 'user_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function herb_forms() { 
        //DD herb_has_forms c'est le nom de la table pivot
        return $this->belongsToMany(HerbForm::class, 'herb_has_forms')->withTimestamps(); 
    }

    public function targets()
    {
        return $this->belongsToMany(Target::class, 'hinteractions');
    }

    public function hinteractions()
    {
        return $this->hasMany(Hinteraction::class, 'herb_id', 'id');
    }
    //Thierry Tester 


}
