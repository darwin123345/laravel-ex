<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{   
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\Post');      
    }

     public function history(){
        return $this->hasMany('App\History');

        
    }
    public function mav(){
        return $this->hasMany('App\Mav');

      
    }
    public function rules(){
        return $this->hasMany('App\Rule');

      
    }
    public function acads(){
        return $this->hasMany('App\Acad');

      
    }
    public function orgs(){
        return $this->hasMany('App\Org');

      
    }
    public function scholars(){
        return $this->hasMany('App\Scholar');

      
    }
    public function pread(){
        return $this->hasMany('App\PreAd');

      
    }
}
