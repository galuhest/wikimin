<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    //
    protected $table = 'candidates';
    protected $fillable = ['candidate_id',
            'year_given',
            'voucher',
            'testimony',
            'source'];
}
