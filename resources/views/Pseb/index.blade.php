<!--Admin/Teacher Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>PSEB Internees</h5>
            </div>
            <div class="card-body">
              <!-- <h4 class="card-title"><a href="{{route('teachers.create')}}" class="btn btn-info btn-fw">+Add</a></h4> -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>joining date</th>
                        <th>Emp ID</th>
                        <th>Shift</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                     @foreach($internees as $internee) 
                      <tr>
                        <td>{{$internee->id}}</td>
                        <td>{{$internee->name}}</td>
                        <td>{{$internee->designation}}</td>
                        <td>{{$internee->joining_date}}</td>
                        <td>{{$internee->emp_id}}</td>
                        <td>{{$internee->shift}}</td>
                        <td>
                          
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