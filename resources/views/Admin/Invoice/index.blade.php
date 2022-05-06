<!--Admin/Invoice Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Invoice</h5>
            </div>
            <div class="card-body">
                  <h4 class="card-title"><a href="{{route('invoice.create')}}" class="btn btn-info btn-fw">+Add</a></h4>
                        <div class="row form-group">
                          <label class="col-sm-1 col-form-label">Class</label>
                          <div class="col-sm-3">
                            <select class="form-control" name="teacher">
                              <option value="">Select Class</option>
                              <option value="">test</option>
                            </select>
                          </div>

                          <label class="col-sm-1 col-form-label">Section</label>
                          <div class="col-sm-3">
                            <select class="form-control" name="teacher">
                              <option value="">Select Section</option>
                              <option value="">test</option>
                            </select>
                          </div>
                        </div><br>
              <!-- <h4 class="card-title"><a href="{{route('students.create')}}" class="btn btn-info btn-fw">+Add</a></h4> -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($Students as $Student)
                      <tr>
                        <td>{{$Student->id}}</td>
                        <td>{{$Student->student_name}}</td>
                        <td>{{$Student->father_name}}</td>
                        <td>{{$Student->scl_class->class_name}}</td>
                        <td>{{$Student->section_id}}</td>
                        <td>{{$Student->date}}</td>
                        <td>
                          <label class="badge badge-info">{{$Student->status}}</label>
                        </td>
                        <td>
                          <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#exampleModal-{{$Student->id}}" data-whatever="@mdo"><i class="fa fa-dollar fa-lg"></i> Take Fee</a>&nbsp; 
                          <a href="#" class="badge badge-success"><i class="fa fa-eye fa-lg"></i></a>
                        </td>

                        <div class="modal fade" id="exampleModal-{{$Student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-4">Fees Pay</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                       
                          <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                          
                        <div class="row form-group">
                          <label class="col-sm-2 col-form-label">Fee Type</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="fee_type">
                              <option value="">Select Fee Type</option>
                              @foreach($Fee_Types as $Fee_Type)
                              <option value="{{$Fee_Type->id}}">{{$Fee_Type->fee_type}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="row form-group">
                          <label class="col-sm-2 col-form-label">Fee Month</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="fee_month">
                              <option value="">Select Month</option>
                              <option value="January">January</option>
                              <option value="February">February</option>
                              <option value="March">March</option>
                              <option value="April">April</option>
                            </select>
                          </div>
                        </div>

                        <input type="hidden" class="form-control" name="student" value="{{$Student->id}}">
                        <input type="hidden" class="form-control" name="class" value="{{$Student->scl_class_id}}">
                        <input type="hidden" class="form-control" name="section" value="{{$Student->section_id}}">

                        <div class="row form-group">
                          <label class="col-sm-2 col-form-label">Amount</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="amount" value="{{$Student->monthly_fee}}" readonly="">
                          </div>
                        </div>

                        <div class="row form-group">
                          <label class="col-sm-2 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="date" value="{{date('Y-m-d')}}" readonly="">
                          </div>
                        </div>

                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Paid</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                      @endforeach
              
        
             
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection