<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryData extends Model
{
    protected $fillable = ['id','type_id', 'type_name', 'type_field', 'new_value'];
}
