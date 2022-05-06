<!--Admin/Section Index-->

@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-header">
                  <h5>Roles</h5>
            </div>
            <div class="card-body">
              @can('role-create')
              <h4 class="card-title"><a href="{{ route('roles.create') }}" class="btn btn-info btn-fw">+Add</a></h4>
              @endcan
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($roles as $role)
                      <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>
                          <label class="badge badge-info">On hold</label>
                        </td>
                        <td>
                          <button class="btn btn-outline-primary">View</button>
                          <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                          @can('role-edit')
                          <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                          @endcan
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