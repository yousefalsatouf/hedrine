<?php

namespace App;
use App\User;


use Illuminate\Database\Eloquent\Model;

class Reference extends Model  
{
     protected $fillable = [
        'id','title', 'authors','year','url','user_id'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function dinteractions()
    {
        return $this->belongsToMany(Dinteraction::class);
    }

    public function hinteractions()
    {
        return $this->belongsToMany(Hinteraction::class,'hinteraction_has_references','reference_id', 'id');
    }

    public function getname()

    {
        
    }
}
