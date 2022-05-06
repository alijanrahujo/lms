<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSectionRequest;
use App\Models\Scl_Class;
use App\Models\Teacher;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user()->id;
        $Sections=Section::where('scl_id',$user)->get();

        return view('Admin.Sections.index', compact('Sections'));
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
        $Classes=Scl_Class::where('scl_id',$user)->get();
         return view('Admin.Sections.create', compact('Teachers', 'Classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSectionRequest $request)
    {
        //
         $Section=new Section;

         $user=Auth::user()->id;

        $Section->section_name=$request->section_name;
        $Section->category=$request->category;
        $Section->teacher_id=$request->teacher;
        $Section->scl_class_id=$request->class;
        $Section->scl_id=$user;

        $Section->save();

        return redirect('sections');
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
        $Classes=Scl_Class::where('scl_id',$user)->get();
        $Sections=Section::where('id',$id)->first();

        return view('Admin.Sections.edit', compact('Teachers', 'Classes', 'Sections'));

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
        $Section= Section::find($id)
        ->update([
            'section_name'=>$request->section_name,
            'category'=>$request->category,
            'teacher'=>$request->teacher,
            'class_name'=>$request->class
        ]);

        return redirect('sections');

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
