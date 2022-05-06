<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendece;
use App\Models\Pseb_Internee;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internees =Pseb_Internee::all();
        return view('Admin.Attendence.manual',compact('internees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Attendence.record');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $internee=$request->emp_id;
       $shift=Pseb_Internee::where('emp_id',$internee)->first('shift');

        $attendence=new Attendece;

        if ($request->remarks) {
         $user=Auth::user()->id;
         $date=date('Y-m-d');
         $day=date('l');
         $time_in="-";
         $time_out="-";

         }else{
         $user=Auth::user()->id;
         $date=date('Y-m-d');
         $day=date('l');
         $time_in=$request->time_in;
         $time_out=$request->time_out;

         }
        $latetime= '09:30';
         if ($request->time_in > $latetime) {
             $late_arrival= "yes";
         }else
         {
            $late_arrival="-";
         }
        




        $attendence->emp_id=$request->emp_id;
        $attendence->date=$date;
        $attendence->day=$day;
        $attendence->time_in=$time_in;
        $attendence->time_out=$time_out;
        $attendence->late_arrival=$late_arrival;
        $attendence->early_left="";
        $attendence->shift=$shift['shift'];
        $attendence->remarks=$request->remarks;
        $attendence->scl_id=$user;
        $attendence->status="";

        $attendence->save();

        return redirect('attendence');
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

    public function record(Request $request)
    {
      
         $record= Attendece::where('emp_id',$request->emp_id)->get();
         $internee= Pseb_Internee::where('emp_id',$request->emp_id)->get();

         return view('Admin.Attendence.sheet',compact('record','internee'));
    }

    public function class_ajax2(Request $request)
    {
      
         return $request;
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
