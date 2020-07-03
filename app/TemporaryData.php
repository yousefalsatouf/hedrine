<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TemporaryData extends Model
{
    use Notifiable;
    protected $fillable = ['id','type_id', 'type_table', 'type_field', 'original_value', 'new_value', 'modified', 'author', 'author_id'];

    public function herb_forms_temporary() {
        //DD herb_has_forms c'est le nom de la table pivot
        return $this->belongsToMany(HerbForm::class, 'herb_has_forms')->withTimestamps();
    }

}
