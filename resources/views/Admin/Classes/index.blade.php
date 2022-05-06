<!-- Admin/Class Index-->
@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
    @if($errors->has('class_name'))
      @foreach($errors->get('class_name') as $error)
        <p style="color: red;">{{$error}}</p>
      @endforeach
    @endif
    <div class="card">
      <div class="card-header">
                  <h5>Classes</h5>
      </div>
      <div class="card-body">
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@mdo">+Add</button>
                  <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-4">New Class</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                       
                          <form method="POST" action="{{ route('classes.store') }}" enctype="multipart/form-data">
                            @csrf
                          
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Class Name:</label>
                              <input type="text" class="form-control" id="message-text" name="class_name"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Save</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
             
          
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Class</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($Classes as $Class)
                      <tr>
                        <td>{{$Class->id}}</td>
                        <td>{{$Class->class_name}}</td>
                        <td>
                          <label class="badge badge-info">On hold</label>
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