<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Scholar;
use DB;


class ScholarshipsController extends Controller
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
            $scholars= Scholar::all();
            return view('scholars.show')->with('scholars' , $scholars);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('scholars.create');
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
    
                // Create scholarship 
                $scholars = new Scholar;
                $scholars->title = $request->input('title');
                $scholars->body = $request->input('body');
                $scholars->user_id = auth()->user()->id;
                $scholars->save();
    
                return redirect('/scholars')->with('success', 'Scholarship Program Created');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $scholars = Scholar::find($id);
            return view('scholars.show')->with('scholar', $scholars);
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $scholars = Scholar::find($id);
            
            if(auth()->user()->id !==$scholars->user_id){
                return redirect('/')->with('error', 'Unauthorized Page');
            }
             
             return view('scholars.edit')->with('scholar' , $scholars);
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
    
            // Create scholarship
            $scholars = Scholar::find($id) ;
            $scholars->title = $request->input('title');
            $scholars->body = $request->input('body');
            $scholars->user_id = auth()->user()->id;
            $scholars->save();
    
            return redirect('/scholars')->with('success', 'Scholarship Program Updated');    
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $scholars = Scholar::find($id);
            // Check for correct user
            if(auth()->user()->id !==$scholars->user_id){
                return redirect('/')->with('error', 'Unauthorized Page');
            }
            
            $scholars->delete();
            return redirect('scholars')->with('success', 'Scholarship Program Removed');
        }
}
