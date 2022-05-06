<!--Admin/Parent Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Parents</h5>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{route('fathers.create')}}" class="btn btn-info btn-fw">+Add</a></h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Parent Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($Fathers as $Father)  
                      <tr>
                        <td>{{$Father->id}}</td>
                        <td>{{$Father->parent_name}}</td>
                        <td>{{$Father->address}}</td>
                        <td>{{$Father->mobile}}</td>
                        <td>
                          <label class="badge badge-info">On hold</label>
                        </td>
                        <td>
                          <a href="{{route('fathers.edit',$Father->id)}}" class="badge badge-primary"><i class="fa fa-edit fa-lg"></i></a>&nbsp; 
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