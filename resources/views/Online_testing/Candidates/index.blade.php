<!--Admin/Student Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Candidates</h5>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{route('candidates.create')}}" class="btn btn-info btn-fw">+Add</a></h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>CNIC</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($candidates as $candidate)
                      <tr>
                        <td>{{$candidate->id}}</td>
                        <td>{{$candidate->candidate_name}}</td>
                        <td>{{$candidate->father_name}}</td>
                        <td>{{$candidate->cnic}}</td>
                        <td>{{$candidate->gender}}</td>
                        <td>{{$candidate->mobile}}</td>
                        <td>
                          <label class="badge badge-info">{{$candidate->status}}</label>
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