<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers= Teacher::all();
        return view('Admin.Teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Admin.Teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->hasFile('pic')){ 
       $file=$request->file('pic');
       $pic= $file->getClientOriginalName();
       $pic= time(). '.' .$pic;
       $path=$file->storeas('public',$pic);
       $path=public_path($pic);
    }else{
        $pic='null';
    }
        
        $Teacher= new Teacher;

        $Teacher->teacher_name=$request->teacher_name;
        $Teacher->education=$request->education;
        $Teacher->gender=$request->gender;
        $Teacher->dob=$request->dob;
        $Teacher->address=$request->address;
        $Teacher->email=$request->email;
        $Teacher->mobile=$request->mobile;
        $Teacher->pic=$pic;
        $Teacher->emp_id=$request->emp_id;
        $Teacher->status=$request->status;
    
        $Teacher->save();

        return redirect('teachers')
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
