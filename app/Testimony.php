<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    //
    protected $table = 'testimonies';
    protected $fillable = ['person_id',
            'year_given',
            'voucher',
            'testimony',
            'source'];

    public function topic() {
      $this->belongsTo("App\Topic");
    }
}
