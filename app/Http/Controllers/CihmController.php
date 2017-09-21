<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class CihmController extends Controller
{
    public function index()
    { 
        $posts = Post::where('department','CIHM')->orderBy('created_at','desc')->paginate(7);
        return view('cihm')->with('posts', $posts);

    }
}
