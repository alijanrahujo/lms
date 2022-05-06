<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use App\Models\scl_Class;
use App\Http\Requests\StoreSubjectRequest;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user()->id;
        $Subjects= Subject::where('scl_id',$user)->get();
      
        return view('Admin.Subjects.index', compact('Subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user= Auth::user()->id;
        $Teachers=Teacher::where('scl_id',$user)->get();
        $Classes= scl_Class::where('scl_id',$user)->get();
        return view('Admin.Subjects.create', compact('Teachers', 'Classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubjectRequest $request)
    {
        //
        $Subject= new Subject;

        $user=Auth::user()->id;

        $Subject->scl_class_id=$request->class;
        $Subject->subject=$request->subject;
        $Subject->teacher_id=$request->teacher;
        $Subject->scl_id=$user;
     
        $Subject->save();

        return redirect('subjects');
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
        $user= Auth::user()->id;
        $Teachers=Teacher::where('scl_id',$user)->get();
        $Classes= scl_Class::where('scl_id',$user)->get();
        $Subjects=Subject::where('id',$id)->first();

        return view('Admin.Subjects.edit', compact('Subjects','Teachers','Classes'));

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
        $subject= Subject::find($id)
        ->update([
            'scl_class_id'=>$request->class,
            'subject'=>$request->subject,
            'teacher_id'=>$request->teacher
        ]);

        return redirect('subjects');
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
