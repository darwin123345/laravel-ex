<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicTrack extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function user1(){
        return $this->belongsTo('subcategory', 'foreign_key');
    }
}
