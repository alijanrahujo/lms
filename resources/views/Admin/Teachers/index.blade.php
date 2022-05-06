<!--Admin/Teacher Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Teachers</h5>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{route('teachers.create')}}" class="btn btn-info btn-fw">+Add</a></h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                     @foreach($teachers as $teacher) 
                      <tr>
                        <td>{{$teacher->id}}</td>
                        <td>{{$teacher->teacher_name}}</td>
                        <td>{{$teacher->gender}}</td>
                        <td>{{$teacher->mobile}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>
                          <label class="badge badge-info">{{$teacher->status}}</label>
                        </td>
                        <td>
                          <a href="{{route('teachers.edit',$teacher->id)}}" class="badge badge-primary"><i class="fa fa-edit fa-lg"></i></a>&nbsp; 
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