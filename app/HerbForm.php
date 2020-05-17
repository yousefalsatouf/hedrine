<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HerbForm extends Model
{
    public function herbs() { 
        return $this->belongsToMany(Herb::class, 'herb_has_forms'); 
    }
}
