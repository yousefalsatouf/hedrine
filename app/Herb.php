<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function herb_forms()
    {
        return $this->belongsToMany(HerbForm::class);
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
        return $this->belongsToMany(Hinteraction::class);
    }
}
