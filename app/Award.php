<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    //
    protected $table = 'awards';
    protected $fillable = ['person_id',
            'year_given',
            'award',
            'source'];

}
