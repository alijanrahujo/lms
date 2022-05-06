<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Father;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFatherRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user()->id;
        $Fathers=Father::where('scl_id',$user)->get();
        return view('Admin.Fathers.index', compact('Fathers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Admin.Fathers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFatherRequest $request)
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
        
        $Parent= new Father;

        $user=Auth::user()->id;

        $Parent->parent_name=$request->father_name;
        $Parent->address=$request->address;
        $Parent->mobile=$request->mobile;
        $Parent->pic=$pic;
        $Parent->scl_id=$user;
    
        $Parent->save();

        return redirect('fathers');
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
        $Parent=Father::where('id',$id)->first();
        return view('Admin.Fathers.edit',compact('Parent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFatherRequest $request, $id)
    {

        if($request->hasFile('pic')){ 
       $file=$request->pic;
       $pic= time(). '.' .$file;
       $path=$file->storeas('public',$pic);
       $path=public_path($pic);
    }else{
        $pic='null';
    }

        $Parent=Father::find($id)
        ->update([
            'parent_name'=>$request->father_name,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'pic'=>$pic
        ]);

        return redirect('fathers');

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
