<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryData extends Model
{
    protected $fillable = ['id','type_id', 'type'];

    function Herbs()
    {
        return $this->belongsTo(Herb::class, 'type_id');
    }
}
