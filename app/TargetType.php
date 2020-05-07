<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetType extends Model
{
    public function targets()
    {
        return $this->belongsTo(targets::class);
    }
}
