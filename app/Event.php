<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function club(){
        return $this->belongsTo('App\Club','id','id');
    }
}
