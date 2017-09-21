<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mav;
class CbaMavController extends Controller
{
    
    public function index()
    {
        $mav = Mav::where('user_id','3')->orderBy('created_at','asc')->paginate(7);
        return view('cbaMav')->with('mav' , $mav);
        
    }
}
