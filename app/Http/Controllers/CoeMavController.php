<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mav;
class CoeMavController extends Controller
{
    public function index()
    {
        $mav = Mav::where('user_id','5')->orderBy('created_at','asc')->paginate(7);
        return view('coeMav')->with('mav' , $mav);
        
    }
}
