<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryData extends Model
{
    protected $fillable = ['id','type_id', 'type_table', 'type_field', 'original_value', 'new_value', 'modified', 'author', 'author_id'];
}
