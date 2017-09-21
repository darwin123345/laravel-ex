<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mav;

class ConMavController extends Controller
{
    public function index()
    {
        $mav = Mav::where('user_id','8')->orderBy('created_at','asc')->paginate(7);
        return view('conMav')->with('mav' , $mav);
        
    }
}
