<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\PreAd;
use  App\category;
use  App\subcategory;
use DB;


class PreAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preregistration= PreAd::all();
        return view("pread.create")->with('preregistration',$preregistration);
    }


    public function plp_cat()
    {       
        $preregistration = DB::select("SELECT p.lastname,p.firstname,p.middlename,p.street,p.barangay,p.city,YEAR(now()) - YEAR(str_to_date(p.birthday,'%Y-%m-%d')) - (DATE_FORMAT(now(), '%m%d') < DATE_FORMAT(str_to_date(p.birthday,'%Y-%m-%d'), '%m%d')) as 'age' ,p.email , p.mobile,c.name as 'track',s.name as 'course' FROM pre_ads p LEFT JOIN subcategories s on p.course_id = s.id left join categories c on s.category_id = c.id ");
        //$preregistration= PreAd::orderBy('created_at','asc')->paginate(4);
        return view("plp-cat")->with('preregistration',$preregistration);
    }

    public function loadAc()
    {
        $categories =  category::all();
        return view('pread.create')->with('categories',$categories);
    }

    public function ajax($cat_id) {
        $cat_id    = $cat_id;
        $SubCategories = subcategory::where('category_id', '=', $cat_id)->get();
        return response()->json($SubCategories);
       }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'lastname' => 'required',
            'firstname' => 'required',
            'middlename'=>'required',
            'birthday'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'gender'=>'required',
            'street'=>'required',
            'barangay'=>'required',
            'city'=>'required',
        ]);

        $preregister = new PreAd;
        $preregister->lastname = $request->input('lastname');
        $preregister->firstname = $request->input('firstname');
        $preregister->middlename = $request->input('middlename');
        $preregister->birthday = $request->input('birthday');
        $preregister->birth = $request->input('birth');
        $preregister->gender = $request->input('gender');
        $preregister->mobile = $request->input('mobile');
        $preregister->citizenship = $request->input('citizenship');
        $preregister->street = $request->input('street');
        $preregister->barangay = $request->input('barangay');
        $preregister->city = $request->input('city');
        $preregister->email = $request->input('email');
        //$preregister->course_id = $get->input(['course_id']);
        $preregister->save();

        return redirect('/')->with('success', 'Application Sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
