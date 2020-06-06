<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body','user_id','important'
    ];

    public $timestamps = true;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
