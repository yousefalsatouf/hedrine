<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugFamily extends Model
{
    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }

    public function atc_level2()
    {
        return $this->hasMany(Drug::class);
    }
}
