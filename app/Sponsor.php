<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public function club(){
        return $this->belongsTo('App\Club','id','id');
    }
}
