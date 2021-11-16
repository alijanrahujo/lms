<!--Super Admin Index-->
@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Schools</h5>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{route('institutes.create')}}" class="btn btn-info btn-fw">+Create</a></h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Institute Name</th>
                        <th>Address</th>
                        <th>Owner Name</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                  @foreach($institutes as $institute)    
                      <tr>
                        <td>{{$institute->id}}</td>
                        <td>{{$institute->inst_name}}</td>
                        <td>{{$institute->address}}</td>
                        <td>{{$institute->owner_name}}</td>
                        <td>{{$institute->mobile}}</td>
                        <td>
                          <label class="badge badge-info">{{$institute->status}}</label>
                        </td>
                        <td>
                          <button class="btn btn-outline-primary">View</button>
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