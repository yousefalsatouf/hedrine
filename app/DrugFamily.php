<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugFamily extends Model
{
    public function drugs()
    {
        return $this->hasMany(drugs::class);
    }

    public function atc_level2()
    {
        return $this->hasMany(drugs::class);
    }
}
