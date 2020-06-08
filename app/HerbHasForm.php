<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HerbHasForm extends Model
{
	protected $fillable = [
        'herb_id', 'herb_form_id'
    ];
   public $timestamps = true;
}
