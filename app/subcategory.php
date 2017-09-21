<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $fillable = ['name','category_id'];
    public function user(){
        return $this->belongsTo('AcademicTrack');
    }
    public function user1(){
        return $this->belongsTo('category');
    }
}
