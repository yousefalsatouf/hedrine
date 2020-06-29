<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryHerbs extends Model
{
    protected $fillable = [
        'id','herb_id', 'name', 'sciname', 'validated','edit_by'
    ];
}
