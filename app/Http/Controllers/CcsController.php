<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class CcsController extends Controller

{
    public function index()
    { 
        $posts = Post::where('department','CCS')->orderBy('created_at','desc')->paginate(7);
        return view('ccs')->with('posts', $posts);
    }
}
