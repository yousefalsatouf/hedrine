<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtcLevel4 extends Model
{
    public function drug_families()
    {
        return $this->hasMany(drug_families::class);
    }

    public function atc_level3s()
    {
        return  $this -> belongsTo(atc_level3s :: class);
    }
}
