<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    protected $table = 'candidates';
    protected $fillable = ['name_head',
            'name_vice'];

    public function visions(){
        $this->hasMany('App\Vision');
    }
    public function missions(){
        $this->hasMany('App\Missions');
    }
}
