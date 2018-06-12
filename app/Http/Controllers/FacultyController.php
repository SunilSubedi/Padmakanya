<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = App\Faculty::all();
        return view('admin.pages.faculty.list')->with('faculties',$faculties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.faculty.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faculty = new App\Faculty();
        $faculty->name = $request->name;
        $faculty->address = $request->address;
        $faculty->contact =$request->contact;
        $faculty->designation =$request->designation;
        $faculty->save();

        return redirect()->route('faculty.index');
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
      $faculty = App\faculty::find($id);
        
      return view('admin.pages.faculty.edit')->with('faculty',$faculty);
        
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
       $faculty = App\faculty::find($id);

       $faculty->name = $request->name;
        $faculty->address = $request->address;
        $faculty->contact =$request->contact;
        $faculty->designation =$request->designation;
        $faculty->save();

        return redirect()->route('faculty.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faculty = App\Faculty::find($id);
        $faculty->delete();

        return redirect()->route('faculty.index');
    }
}
