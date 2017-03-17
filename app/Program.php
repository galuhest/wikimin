<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    protected $table = 'programs';
    protected $fillable = ['candidate_id',
            'value',
            'source',
            'topic_id'];

    public function topic() {
      return $this->belongsTo('App\Topic');
    }
}
