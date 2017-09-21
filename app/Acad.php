<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acad extends Model
{
     public function user(){
        return $this->belongsTo('App\User');
    }
}
