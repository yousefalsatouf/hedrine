<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtcLevel2 extends Model
{
    public function atc_level3s()
    {
        return $this->hasMany(AtcLevel3::class);
    }

    public function drug_families()
    {
        return  $this -> belongsTo(DrugFamily :: class);
    }
}
