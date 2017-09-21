<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mav;


class CeeMavController extends Controller
{
    public function index()
    {
        $mav = Mav::where('user_id','6')->orderBy('created_at','asc')->paginate(7);
        return view('ceeMav')->with('mav' , $mav);
        
    }
}
