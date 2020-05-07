<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    /**
     * Get the drugs for the blog drug_families.
     */
    public function atc_level4s()
    {
        return $this->belongsTo(atc_level4s::class);
    }

    public function drug_families()
    {
        return $this->belongsTo(drug_families::class);
    }

    public function routes()
    {
        return $this->belongsTo(routes::class);
    }

    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function targets()
    {
        return $this->belongsToMany(targets::class);
    }
}
