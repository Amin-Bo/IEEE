<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function users(){
        return $this->hasMany('App\User');
    }
    public function memories(){
        return $this->hasMany('App\Memory');
    }
    public function events(){
        return $this->hasMany('App\Event');
    }
    public function sponsors(){
        return $this->hasMany('App\Sponsor');
    }
    public function teams(){
        return $this->hasMany('App\Team');
    }
}
