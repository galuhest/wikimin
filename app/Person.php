<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = 'person';
    protected $fillable = ['name'];

    public function careers(){
        $this->hasMany('App\Career');
    }
    public function educations(){
        $this->hasMany('App\Education');
    }
    public function tesimonies(){
        $this->hasMany('App\Testimony');
    }
    public function controversies(){
        $this->hasMany('App\Controversy');
    }
}
