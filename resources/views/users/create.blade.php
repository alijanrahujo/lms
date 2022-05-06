    <!--Create new Teacher-->

     @extends('layouts.dashboard.master')

      @section('content')
            <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row flex-grow">
           <div class="col-12 grid-margin">
            @if (count($errors) > 0)
              <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
              </ul>
              </div>
            @endif
              <div class="card">
                <div class="card-header">
                  <h5>Register New User</h5>
                </div>
                <div class="card-body">
                 
                  <form class="form-sample" action="{{route('users.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <p class="card-description">
                      User info
                    </p>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Select School</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="name">
                              <option>Select School</option>
                              @foreach($scls as $scls)
                              
                              <option value="{{$scls->inst_name}}">{{$scls->inst_name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">UserName</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email">
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" name="password">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                      <label class="col-sm-3 col-form-label">Role</label>
                      {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                      </div>
                      </div>
                    </div>

                    

                   
                    <button type="submit" class="btn btn-success mr-2">Submit</button>

               
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 

        @endsection    