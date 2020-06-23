<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryHerbs extends Model
{
    protected $fillable = [
        'id','name', 'sciname','author','edit_by'
    ];
}
