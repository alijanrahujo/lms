<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Fee_Type;
use App\Models\Invoice;
use App\Models\Scl_Class;
use App\Models\Section;





class InvoiceController extends Controller
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
        $Fee_Types=Fee_Type::where('scl_id',$user)->get();


        return view('Admin.Invoice.index', compact('Students','Fee_Types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes= Scl_Class::all();
        $sections= Section::all();
        $students= Student::all();
        $fee_types= Fee_Type::all();

        return view('Admin.Invoice.create',compact('classes','sections','students','fee_types'));
    }

    public function class_ajax($class_id)
    {
        return $session = Section::where('scl_class_id',$class_id)->get();
    }
    public function session_ajax($session_id)
    {
        return $student = Student::where('section_id',$session_id)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user()->id;
        $invoice=new Invoice;

        $invoice->student_id=$request->student;
        $invoice->class_id=$request->class;
        $invoice->section_id=$request->section;
        $invoice->fee_type=$request->fee_type;
        $invoice->fee_month=$request->fee_month;
        $invoice->date=$request->date;
        $invoice->amount=$request->amount;
        $invoice->payment_status="Paid";
        $invoice->scl_id=$user;

        $invoice->save();

        return redirect('invoive');
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

    public function invoice_ajax(Request $request, $id)
    {   
        $student = Student::where(['scl_class_id'=>$request->class_id,'section_id'=>$request->session_id,'scl_id'=>$id])->get();
        $fees = [];
        $fee_type = $request->fee_type;

        foreach($student as $stu)
        {
            if($fee_type == "Monthly")
            {
                $fees['fee'][] = $stu->monthly_fee;
            }
            else
            {
                $fee_types = Fee_Type::where('fee_type',$request->fee_type)->first();
                $fees['fee'][] = $fee_types->fee;
            }
        }
    
       return $fees;
    }
    
}
