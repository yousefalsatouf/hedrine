<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DrugFamily;
use Illuminate\Notifications\Notifiable;

class Drug extends Model
{
    use Notifiable;

    protected $fillable = [
        'id','name', 'drug_families_id','route_id','user_id','atc_id'
    ];
    /**
     * Get the drugs for the blog drug_families.
     */
    public function atc()
    {
        return $this->belongsTo(Atc::class,'atc_id');
    }

    public function drug_family()
    {
        return $this->belongsTo(DrugFamily::class,'drug_families_id');
    }

    public function routes()
    {
        return $this->belongsTo(Route::class, 'route_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function targets()
    {
        return $this->belongsToMany(Target::class, 'dinteractions')->withTimestamps();
    }

    public function dinteractions()
    {
        return $this->hasMany(Dinteraction::class);
    }


}
