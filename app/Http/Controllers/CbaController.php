<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class CbaController extends Controller

{
    public function index()
    { 
        $posts = Post::where('department','CBA')->orderBy('created_at','desc')->paginate(7);
        return view('/cba')->with('posts', $posts);
    }
}
