<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class CoeController extends Controller
{
    public function index()
    { 
        $posts = Post::where('department','COE')->orderBy('created_at','desc')->paginate(7);
        return view('coe')->with('posts', $posts);

         
    }
}
