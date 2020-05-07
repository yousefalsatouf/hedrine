<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Herb extends Model
{
    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function herb_forms()
    {
        return $this->belongsToMany(herb_forms::class);
    }

    public function targets()
    {
        return $this->belongsToMany(targets::class);
    }

    public function dinteractions()
    {
        return $this->belongsToMany(dinteractions::class);
    }

    public function hinteractions()
    {
        return $this->belongsToMany(dinteractions::class);
    }
}
