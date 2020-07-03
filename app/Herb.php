<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Herb extends Model
{
    use Notifiable;

    protected $fillable = ['name', 'sciname', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function herb_forms() {
        //DD herb_has_forms c'est le nom de la table pivot
        return $this->belongsToMany(HerbForm::class, 'herb_has_forms')->withTimestamps();
    }

    public function targets()
    {
        return $this->belongsToMany(Target::class, 'hinteractions')->withTimestamps();
    }

    public function hinteractions()
    {
        return $this->hasMany(Hinteraction::class);
    }


    //Thierry Tester


}
