<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HerbHasForm extends Model
{
	protected $fillable = [
        'herb_id', 'temporary_data_id', 'herb_form_id'
    ];
   public $timestamps = true;
}
