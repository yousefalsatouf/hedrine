<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable = [
        'texte',
        'email',
        'herb_id',
    ];

    /**
     * Get the ad that owns the message.
     */
    public function herb()
    {
        return $this->belongsTo(Herb::class);
    }
}
