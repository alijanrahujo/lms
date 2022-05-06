<?php

namespace App\Http\Controllers\Online_testing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;

class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates=Candidate::all();

        return view('Online_testing.Candidates.index', compact('candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Online_testing.Candidates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        
        $candidate= new Candidate;

        $candidate->candidate_name=$request->candidate_name;
        $candidate->father_name=$request->father_name;
        $candidate->cnic=$request->cnic;
        $candidate->gender=$request->gender;
        $candidate->mobile=$request->mobile;
        $candidate->pic=$pic;
        $candidate->status="Active";
        $candidate->scl_id=$user;

    
        $candidate->save();

        return redirect('candidates');
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
