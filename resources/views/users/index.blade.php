<!--Admin/Student Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Users</h5>
            </div>
            <div class="card-body">
              <h4 class="card-title"><a href="{{ route('users.create') }}" class="btn btn-info btn-fw">+Add</a></h4>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $key => $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                        @if(!empty($user->getRoleNames()))
                          @foreach($user->getRoleNames() as $v)
                          <label class="badge badge-success">{{ $v }}</label>
                          @endforeach
                        @endif
                        </td>
                        
                        <td>
                          <label class="badge badge-info">{{$user->status}}</label>
                        </td>
                        <td>
                          <a href="{{route('users.edit',$user->id)}}" class="badge badge-primary"><i class="fa fa-edit fa-lg"></i></a>&nbsp; 
                          <a href="#" class="badge badge-danger"><i class="fa fa-trash-o fa-lg"></i></a>&nbsp;
                          <a href="{{route('users.show',$user->id)}}" class="badge badge-success"><i class="fa fa-eye fa-lg"></i></a>
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