<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function drugs()
    {
        return $this->belongsTo(drugs::class);
    }
}
