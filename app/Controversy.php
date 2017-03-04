<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controversy extends Model
{
    //
    protected $table = 'controversies';
    protected $fillable = ['topic_id',
        'source',
        'value'];
}
