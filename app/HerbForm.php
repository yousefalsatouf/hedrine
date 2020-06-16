<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HerbForm extends Model
{
	
    public function herbs() { 
        //DD herb_has_forms c'est le nom de la table pivot
        return $this->belongsToMany(Herb::class, 'herb_has_forms')->withTimestamps(); 
    }
}
