<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    protected $table = 'careers';
    protected $fillable = ['person_id',
      'year_start',
      'year_end',
      'institution',
      'position',
      'source'];
}
