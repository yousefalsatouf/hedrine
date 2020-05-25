<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Force extends Model
{
    //
    
    const STATUS_COLOR = [
        'forte' => '#FF0000',
        'moyenne' => '#FFCC33',
        'faible'  =>'#EEE8AA',
        'aucune'  =>'#CCFF99',
        'inconnue' => '#FFCCFF'
];
}
