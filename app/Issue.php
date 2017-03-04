<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //
      protected $table = 'issues';
      protected $fillable = ['person_id',
          'topic_id',
          'source',
          'value'];
}
