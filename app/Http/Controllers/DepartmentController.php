<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = App\Department::all();
        return view('admin.pages.department.list')->with('departments',$department);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.department.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData =$request->validate([
            'name'=>'required|unique:departments',
            'slug'=>'required|unique:departments',
        ]);
        $department = new App\Department();
        $department->name = $request->name;
        $department->slug = $request->slug;
        $department->save();
    
         return redirect('admin/department/create')->with('status', 'Department Added');   
        
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

        $department = App\Department::find($id);

        
        return view('admin.pages.department.edit')->with('department',$department);
    
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
        
        $department = App\Department::find($id);
        $department->name = $request->name;
        $department->slug = $request->slug;
        $department->save();

        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = App\Department::find($id);
        $department->delete();

        return redirect()->route('department.index');
    }
}
