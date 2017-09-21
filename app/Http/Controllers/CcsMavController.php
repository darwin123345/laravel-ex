<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mav;
class CcsMavController extends Controller
{
    
    public function index()
    {
        $mav = Mav::where('user_id','4')->orderBy('created_at','asc')->paginate(7);
        return view('ccsMav')->with('mav' , $mav);
        
    }
}
