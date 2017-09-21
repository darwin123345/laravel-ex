<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Mav;
use DB;

class MavController extends Controller
{
    
         /**
         * Create a new controller instance.
         *
         * @return void
         */
         public function __construct()
         {
            $this->middleware('auth', ['except' => ['index', 'show']]);
         }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $mav = Mav::where('user_id','1')->orderBy('created_at','asc')->paginate(7);
            return view('mav.show')->with('mav' , $mav);
            
        }
     
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('mav.create');
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
             $this->validate($request, [
                'title' => 'required',
                'body' => 'required',
                
            ]);
    
            // Create Post
            $mav = new Mav;
            $mav->title = $request->input('title');
            $mav->body = $request->input('body');
            $mav->user_id = auth()->user()->id;
            $mav->save();
    
            return redirect('/')->with('success', 'Mission and Vision Created');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
           $mav = Mav::find($id);
            return view('mav.show')->with('mav', $mav);
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $mav = Mav::find($id);
            
            if(auth()->user()->id !==$mav->user_id){
                return redirect('/')->with('error', 'Unauthorized Page');
            }
             
             return view('mav.edit')->with('mav' , $mav);
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
           $this->validate($request, [
                'title' => 'required',
                'body' => 'required'
            ]);
    
            // Create Post
            $mav = Mav::find($id) ;
            $mav->title = $request->input('title');
            $mav->body = $request->input('body');
            $mav->user_id = auth()->user()->id;
            $mav->save();
    
            return redirect('/')->with('success', 'Mission and Vision Updated');    
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $mav = Mav::find($id);
            
                    // Check for correct user
                    if(auth()->user()->id !==$mav->user_id){
                        return redirect('/')->with('error', 'Unauthorized Page');
                    }
                    
                    $mav->delete();
                    return redirect('/')->with('success', 'Mission and Vision Removed');

        
         }
    }