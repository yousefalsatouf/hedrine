<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryData extends Model
{
    protected $fillable = [
        'id','herb_id', 'edit_by'
    ];

    function Herbs()
    {
        return $this->hasOne('App\Herb');
    }
}
