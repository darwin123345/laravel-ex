<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Acad;
use DB;

class AcadsController extends Controller
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
        $acads= Acad::all();
        return view('acads.show')->with('acad' , $acads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acads.create');
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
            'semester' => 'required',
            'duration' => 'required',
            'date' => 'required',
            'description' => 'required',
            ]);

            // Create academic calendar
            $acads = new Acad;
            $acads->title = $request->input('title');
            $acads->semester = $request->input('semester');
            $acads->duration = $request->input('duration');
            $acads->date = $request->input('date');
            $acads->description = $request->input('description');
            $acads->user_id = auth()->user()->id;
            $acads->save();

            return redirect('/acads')->with('success', 'Academic Calendar Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $acads = Acad::find($id);
        return view('acads.show')->with('acad', $acads);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acads = Acad::find($id);
        
        if(auth()->user()->id !==$acads->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
         
         return view('acads.edit')->with('acad' , $acads);
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
            'semester' => 'required',
            'duration' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);

        // Create acad
        $acads = new Acad;
        $acads->title = $request->input('title');
        $acads->semester = $request->input('semester');
        $acads->duration = $request->input('duration');
        $acads->date = $request->input('date');
        $acads->description = $request->input('description');
        $acads->user_id = auth()->user()->id;
        $acads->save();

        return redirect('/acads')->with('success', 'Academic Calendar Updated');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acads = Acad::find($id);
        // Check for correct user
        if(auth()->user()->id !==$acads->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        
        $acads->delete();
        return redirect('acads')->with('success', 'Academic Calendar Removed');
    }
}

