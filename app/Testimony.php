<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    //
    protected $table = 'testimonies';
    protected $guarded = [];

    public function topic() {
      $this->belongsTo("App\Topic");
    }
}
