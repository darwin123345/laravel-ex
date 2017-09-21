<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ConsController extends Controller
{
    public function index()
    { 
        $posts = Post::where('department','CON')->orderBy('created_at','desc')->paginate(7);
        return view('cons')->with('posts', $posts);

    }
}
