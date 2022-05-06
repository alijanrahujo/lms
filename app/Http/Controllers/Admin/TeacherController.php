<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user= Auth::user()->id;
        $teachers= Teacher::where('scl_id',$user)->get();
        return view('Admin.Teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
         return view('Admin.Teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
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
        $Teacher->scl_id=$user;

    
        $Teacher->save();

        return redirect('teachers');
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
        $teacher=Teacher::where('id',$id)->first();

        return view('Admin.Teachers.edit', compact('teacher'));
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
        if($request->hasFile('pic')){ 
       $file=$request->file('pic');
       $pic= $file->getClientOriginalName();
       $pic= time(). '.' .$pic;
       $path=$file->storeas('public',$pic);
       $path=public_path($pic);
    }else{
        $pic='null';
    }

        $teacher=Teacher::find($id)->update([
            'teacher_name'=>$request->teacher_name,
            'education'=>$request->education,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'address'=>$request->address,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'pic'=>$pic,
            'emp_id'=>$request->emp_id,
            'status'=>$request->status
        ]);
        return redirect('teachers');
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
