<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    protected $fillable = ['name', 'long_name', 'user_id', 'note','target_type_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function targetype()
    {
        return $this->belongsTo(TargetType::class,'target_type_id');
    }

    public function herbs()
    {
        return $this->belongsToMany(Herb::class);
    }

    public function drugs()
    {
        return $this->belongsToMany(Drug::class);
    }
    public function hinteractions()
    {
        return $this->hasMany(Hinteraction::class);
    }
}
