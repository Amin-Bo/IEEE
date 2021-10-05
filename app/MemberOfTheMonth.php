<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberOfTheMonth extends Model
{
    public function users(){
        return $this->hasMany('App\Users');
    }
}
