<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    protected $fillable = ['name', 'long_name', 'user_id', 'notes','target_type_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function targetype()
    {
        return $this->belongsTo(TargetType::class,'target_type_id');
    }

    public function herbs()
    {
        return $this->belongsToMany(Herb::class, 'hinteractions')->withTimestamps(); 
    }

    public function drugs()
    {
        return $this->belongsToMany(Drug::class, 'dinteractions')->withTimestamps();
    }
    public function hinteractions()
    {
        return $this->hasMany(Hinteraction::class, 'target_id', 'id');
    }
    public function dinteractions()
    {
        return $this->hasMany(Dinteraction::class, 'target_id', 'id'); 
    }
}
