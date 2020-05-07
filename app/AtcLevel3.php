<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtcLevel3 extends Model
{
    public function atc_level4s()
    {
        return $this->hasMany(atc_level4s::class);
    }

    public function atc_level2s()
    {
        return  $this -> belongsTo(atc_level2s :: class);
    }
}
