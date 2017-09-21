<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mav;
class CihmMavController extends Controller
{
    public function index()
    {
        $mav = Mav::where('user_id','7')->orderBy('created_at','asc')->paginate(7);
        return view('cihmMav')->with('mav' , $mav);
        
    }
}
