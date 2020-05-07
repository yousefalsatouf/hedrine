<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Effect extends Model
{
    public function hinteractions()
    {
        return $this->belongsToMany(hinteractions::class);
    }

    public function dinteractions()
    {
        return $this->belongsToMany(dinteractions::class);
    }
}
