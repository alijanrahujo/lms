<!--Admin/Student Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Students</h5>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{route('students.create')}}" class="btn btn-info btn-fw">+Add</a></h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Contact</th>
                        <th>Class</th>
                        <th>Section</th>
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
                        <td>{{$Student->mobile}}</td>
                        <td>{{$Student->scl_class->class_name}}</td>
                        <td>{{$Student->section->section_name}}</td>
                        <td>
                          <label class="badge badge-info">{{$Student->status}}</label>
                        </td>
                        <td>
                          <a href="#" class="badge badge-primary"><i class="fa fa-edit fa-lg"></i></a>&nbsp; 
                          <a href="#" class="badge badge-danger"><i class="fa fa-trash-o fa-lg"></i></a>&nbsp;
                          <a href="#" class="badge badge-success"><i class="fa fa-eye fa-lg"></i></a>
                        </td>
                      @endforeach
              
        
             
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection