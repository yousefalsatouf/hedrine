<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DrugFamily;
use Illuminate\Notifications\Notifiable;


class Atc extends Model
{
    use Notifiable;
    protected $fillable = [
        'id','name', 'drug_families_id'
    ];

    public function drug_family()
    {
        return $this->belongsTo(DrugFamily::class,'drug_families_id');
    }
}
