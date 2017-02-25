<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = 'person';
    protected $fillable = ['name'];

    public function careers(){
      return  $this->hasMany('App\Career');
    }
    public function educations(){
      return  $this->hasMany('App\Education');
    }
    public function tesimonies(){
      return  $this->hasMany('App\Testimony');
    }
    public function controversies(){
      return  $this->hasMany('App\Controversy');
    }
}
