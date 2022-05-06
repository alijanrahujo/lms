<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Scl_Class;
use App\Models\Section;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user()->id;
        $Students=Student::where('scl_id',$user)->get();

        return view('Admin.Students.index', compact('Students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user= Auth::user()->id;
        $Classes= Scl_Class::where('scl_id',$user)->get();
        $Sections= Section::where('scl_id',$user)->get();

        return view('Admin.Students.create', compact('Classes', 'Sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
        $user= Auth::user()->id;

        if($request->hasFile('pic')){ 
       $file=$request->file('pic');
       $pic= $file->getClientOriginalName();
       $pic= time(). '.' .$pic;
       $path=$file->storeas('public',$pic);
       $path=public_path($pic);
    }else{
        $pic='null';
    }
        
        $Student= new Student;

        $Student->student_name=$request->student_name;
        $Student->father_name=$request->father_name;
        $Student->mother_name=$request->mother_name;
        $Student->garien_name="dummy";
        $Student->dob=$request->dob;
        $Student->gender=$request->gender;
        $Student->mobile=$request->mobile;
        $Student->scl_class_id=$request->class_name;
        $Student->section_id=$request->section;
        $Student->roll_nbr=$request->roll_nbr;
        $Student->pic=$pic;
        $Student->roll_nbr=$request->fee;
        $Student->status=$request->status;
        $Student->scl_id=$user;

    
        $Student->save();

        return redirect('students');
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
