<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function getPostFamilyByName(){
        return DrugFamily::where('id',$this->drug_families_id)->first()->nom;
    }
}
