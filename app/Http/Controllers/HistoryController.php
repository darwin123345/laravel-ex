<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\History;
use DB;

class HistoryController extends Controller
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
        $histo= History::all();
        return view('history.show')->with('history' , $histo);

        
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('history.create');
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
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $histo = new History;
        $histo->title = $request->input('title');
        $histo->body = $request->input('body');
        $histo->user_id = auth()->user()->id;
        $histo->cover_image = $fileNameToStore;
        $histo->save();

        return redirect('/history')->with('success', 'History Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $histo = History::find($id);
        return view('history.show')->with('history', $histo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $histo = History::find($id);

        if(auth()->user()->id !==$histo->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
         
         return view('history.edit')->with('history' , $histo);
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

        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        // Create Post
        $histo = History::find($id) ;
        $histo->title = $request->input('title');
        $histo->body = $request->input('body');
        $histo->user_id = auth()->user()->id;
        if($request->hasFile('cover_image')){
            $histo->cover_image = $fileNameToStore;
        }
        $histo->save();

        return redirect('/history')->with('success', 'History Updated');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $history = History::find($id);
        
                // Check for correct user
                if(auth()->user()->id !==$history->user_id){
                    return redirect('/history')->with('error', 'Unauthorized Page');
                }
        
                if($history->cover_image != 'noimage.jpg'){
                    // Delete Image
                    Storage::delete('public/cover_images/'.$history->cover_image);
                }
                
                $history->delete();
                return redirect('/history')->with('success', 'History Removed');
        
        
            } 
}
