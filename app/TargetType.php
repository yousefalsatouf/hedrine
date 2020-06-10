<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetType extends Model
{
	protected $fillable = ['name', 'rank', 'description'];
    
    public function targets()
    {
        return $this->belongsTo(Target::class);
    }
}
