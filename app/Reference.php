<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function dinteractions()
    {
        return $this->belongsToMany(Dinteraction::class);
    }

    public function hinteractions()
    {
        return $this->belongsToMany(Hinteraction::class,'hinteraction_has_references','reference_id', 'id');
    }
}
