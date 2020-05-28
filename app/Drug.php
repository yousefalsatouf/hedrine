<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DrugFamily;

class Drug extends Model
{
    protected $fillable = [
        'id','name', 'drug_families_id','route_id','user_id'
    ];
    /**
     * Get the drugs for the blog drug_families.
     */
    public function atc_level4s()
    {
        return $this->belongsTo(AtcLevel4::class,'atc_level_4s_id');
    }

    public function drug_family()
    {
        return $this->belongsTo(DrugFamily::class,'drug_families_id');
    }

    public function routes()
    {
        return $this->belongsTo(Route::class, 'route_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function targets()
    {
        return $this->belongsToMany(Target::class);
    }
    
    public function dinteractions()
    {
        return $this->hasMany(Dinteraction::class);
    }

    
}
