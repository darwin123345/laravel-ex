<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class CeeController extends Controller
{
    public function index()
    { 
        $posts = Post::where('department','CEE')->orderBy('created_at','desc')->paginate(7);
        return view('cee')->with('posts', $posts);

    }
}
