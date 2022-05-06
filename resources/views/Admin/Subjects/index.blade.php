<!--Admin/Subject Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Subjects</h5>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{route('subjects.create')}}" class="btn btn-info btn-fw">+Add</a></h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>

                      <tr>
                        <th>S.No</th>
                        <th>Class</th>
                        <th>Subject</th>
                        <th>Teacher</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($Subjects as $Subject)
                      <tr>
                        <td>{{$Subject->id}}</td>
                        <td>{{$Subject->scl_class->class_name}}</td>
                        <td>{{$Subject->subject}}</td>
                        <td>{{$Subject->teacher->teacher_name}}</td>
                        <td>
                          <label class="badge badge-info">On hold</label>
                        </td>
                        <td>
                          <a href="{{route('subjects.edit',$Subject->id)}}" class="badge badge-primary"><i class="fa fa-edit fa-lg"></i></a>&nbsp; 
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