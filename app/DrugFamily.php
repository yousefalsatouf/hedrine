<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugFamily extends Model
{
    protected $fillable = [
        'id','name'
    ];

    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }

    public function atc()
    {
        return $this->hasMany(Atc::class);
    }


}
