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
        $gallerys = App\Gallery::paginate(3);
        return view('admin.pages.gallery.list')->with('gallerys',$gallerys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.pages.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


     
       $gallery = new App\Gallery();
       $gallery->title = $request->title;

       if($request->hasfile('image'))
       {
          $name = $request->image;
          $path= "images\\";
          $filename = time().'.'. $name->getClientOriginalName();
          $location = public_path($path.$filename);
          Image::make($name)->resize(500,300)->save($location);
          $gallery->image = $filename;
       }

       $gallery->save();
       return redirect()->route('notice.create')->with('status', 'Notice  Added sucessfully');


       
       

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
        $notice = App\notice::find($id);

        if($notice->user_id == Auth::user()->id)
        { 
            return view('admin.pages.notice.edit')->with('notice',$notice);
        }
        else
        {
            return back()->with('message', 'The notice is not authorized to you');
        }
        
        
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
        $notice = App\notice::find($id);
       $notice->title = $request->title;
        $notice->description = $request->description;
        $notice->status =$request->status;        

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

        return redirect()->route('notice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = App\Gallery::find($id);
        $notice->delete();

        return redirect()->route('notice.index');
    }
}
