<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $institutes= Institute::all();
        return view('SuperAdmin.Institutes.index',compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('SuperAdmin.Institutes.create');
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
        if($request->hasFile('logo')){ 
       $file=$request->file('logo');
       $logo= $file->getClientOriginalName();
       $logo= time(). '.' .$logo;
       $path=$file->storeas('public',$logo);
       $path=public_path($logo);
    }else{
        $logo='null';
    }
        
        $Institute= new Institute;

        $Institute->inst_name=$request->inst_name;
        $Institute->address=$request->address;
        $Institute->city=$request->city;
        $Institute->phone=$request->phone;
        $Institute->mobile=$request->mobile;
        $Institute->cell=$request->cell;
        $Institute->email=$request->email;
        $Institute->membership=$request->membership;
        $Institute->logo=$logo;
        $Institute->owner_name=$request->owner_name;
        $Institute->designation=$request->designation;
        $Institute->status=$request->status;

        $Institute->save();

        return redirect('institutes');
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
