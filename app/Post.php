<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body','user_id','important','updated_at','created_at'
    ];

    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
