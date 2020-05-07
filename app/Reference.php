<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function dinteractions()
    {
        return $this->belongsToMany(dinteractions::class);
    }

    public function hinteractions()
    {
        return $this->belongsToMany(hinteractions::class);
    }
}
