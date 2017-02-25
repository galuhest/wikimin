<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table = 'educations';
    protected $fillable = ['candidate_id',
        'year_start',
        'year_end',
        'institution',
        'degree'];
}
