<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function target_types()
    {
        return $this->belongsTo(target_types::class);
    }

    public function herbs()
    {
        return $this->belongsToMany(herbs::class);
    }

    public function drugs()
    {
        return $this->belongsToMany(drugs::class);
    }
}
