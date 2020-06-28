<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryData extends Model
{
    protected $fillable = [
        'id','type_id', 'type', 'data', 'edit_by', 'verified_by'
    ];
}
