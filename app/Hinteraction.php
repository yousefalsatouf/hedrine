<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hinteraction extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'herb_id','target_id','force_id','notes'

    ];

    public function effects() {
        //DD: une hinteraction peut avoir plusieurs effets et un effet peut se trouver dans plusieurs hinteractions
        return $this->belongsToMany(Effect::class, 'hinteraction_has_effects')->withTimestamps();
    }

    public function users()
    { 
        return $this->belongsTo(User::class,'user_id');
    }

    public function forces()
    {
        return $this->belongsTo(Force::class,'force_id');
    }

    public function references()
    {
        return $this->belongsToMany(Reference::class, 'hinteraction_has_references')->withTimestamps();
    }

    public function herb()
    {
        return $this->belongsTo(Herb::class,'herb_id');

    }
    public function targets()
    {
        return $this->belongsTo(Target::class,'target_id');

    }

}
