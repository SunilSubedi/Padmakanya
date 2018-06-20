<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Image;
use Auth;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notice = App\Notice::paginate(3);
        return view('admin.pages.notice.list')->with('notices',$notice);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $departments = App\Department::all();
        return view('admin.pages.notice.add')->with('departments',$departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       if(Auth::user()->department_id == $request->department)
       {
       $notice = new App\Notice();
       $notice->title = $request->name;
       $notice->description = $request->description;
       $notice->status = $request->status;
       $notice->user_id = Auth::id();

       if($request->hasfile('image'))
       {
          $name = $request->image;
          $path= "images\\";
          $filename = time().'.'. $name->getClientOriginalName();
          $location = public_path($path.$filename);
          Image::make($name)->resize(500,300)->save($location);
          $notice->image = $filename;
       }

       $notice->save();
       return redirect()->route('notice.create')->with('status', 'Notice  Added sucessfully');



    }
    else
    {

        return back()->withInput()->with('authmessage', 'You are not authorized to add notice');

    }

       
       

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
