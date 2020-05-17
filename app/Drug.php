<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DrugFamily;

class Drug extends Model
{
    /**
     * Get the drugs for the blog drug_families.
     */
    public function atc_level4s()
    {
        return $this->belongsTo(AtcLevel4::class);
    }

    public function drug_family()
    {
        return $this->belongsTo(DrugFamily::class);
    }

    public function routes()
    {
        return $this->belongsTo(Route::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function targets()
    {
        return $this->belongsToMany(Target::class);
    }

    
}
