<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
