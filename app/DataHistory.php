<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataHistory extends Model
{
    protected $fillable = [
        'id','type_id', 'type','original', 'data', 'edit_by'
    ];
}
