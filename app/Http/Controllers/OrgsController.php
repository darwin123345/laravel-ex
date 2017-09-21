<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Org;
use DB;
class OrgsController extends Controller
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
            $orgs= Org::all();
            return view('orgs.show')->with('orgs' , $orgs);
    
            
        }
     
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('orgs.create');
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
    
            // Create Organization
            $orgs = new Org;
            $orgs->title = $request->input('title');
            $orgs->body = $request->input('body');
            $orgs->user_id = auth()->user()->id;
            $orgs->save();
    
            return redirect('/orgs')->with('success', 'Student Organization Created');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
           $orgs = Org::find($id);
            return view('orgs.show')->with('org', $orgs);
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $orgs = Org::find($id);
            
            if(auth()->user()->id !==$orgs->user_id){
                return redirect('/')->with('error', 'Unauthorized Page');
            }
             
             return view('orgs.edit')->with('org' , $orgs);
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
    
            // Create Organization
            $orgs = Org::find($id) ;
            $orgs->title = $request->input('title');
            $orgs->body = $request->input('body');
            $orgs->user_id = auth()->user()->id;
            $orgs->save();
    
            return redirect('/orgs')->with('success', 'Student Organization Updated');    
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $orgs = Org::find($id);
                    // Check for correct user
                    if(auth()->user()->id !==$orgs->user_id){
                        return redirect('/')->with('error', 'Unauthorized Page');
                    }
                    
                    $orgs->delete();
                    return redirect('orgs')->with('success', 'Student Organization Removed');
         }
    }