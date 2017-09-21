<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Rule;
use DB;

class RulesController extends Controller
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
            $rules= Rule::all();
            return view('rules.show')->with('rules' , $rules);
    
            
        }
     
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('rules.create');
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
    
            // Create rule
            $rules = new Rule;
            $rules->title = $request->input('title');
            $rules->body = $request->input('body');
            $rules->user_id = auth()->user()->id;
            $rules->save();
    
            return redirect('/rules')->with('success', 'Rules and Regulations Created');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
           $rules = Rule::find($id);
            return view('rules.show')->with('rule', $rules);
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $rules = Rule::find($id);
            
            if(auth()->user()->id !==$rules->user_id){
                return redirect('/')->with('error', 'Unauthorized Page');
            }
             
             return view('rules.edit')->with('rule' , $rules);
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
    
            // Create Rules
            $rules = Rule::find($id) ;
            $rules->title = $request->input('title');
            $rules->body = $request->input('body');
            $rules->user_id = auth()->user()->id;
            $rules->save();
    
            return redirect('/rules')->with('success', 'Rules and Regulation Updated');    
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $rules = Rule::find($id);
                    // Check for correct user
                    if(auth()->user()->id !==$rules->user_id){
                        return redirect('/')->with('error', 'Unauthorized Page');
                    }
                    
                    $rules->delete();
                    return redirect('rules')->with('success', 'Rules and Regulation Removed');
         }
    }