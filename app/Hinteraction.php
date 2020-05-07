<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinteraction extends Model
{
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
