    <!--Create new Teacher-->

     @extends('layouts.dashboard.master')

      @section('content')
            <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row flex-grow">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h5>Register New Student</h5>
                </div>
                <div class="card-body">
                 
                  <form class="form-sample" action="{{route('candidates.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <p class="card-description">
                      Personal info
                    </p>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Candidate Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="candidate_name" 
                            value="{{old('candidate_name')}}">
                            @if($errors->has('student_name'))
                              @foreach($errors->get('student_name') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Father's Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_name" 
                            value="{{old('father_name')}}">
                            @if($errors->has('father_name'))
                              @foreach($errors->get('father_name') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                   

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">CNIC</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="cnic" 
                            value="{{old('mobile')}}">
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="gender">
                              <option value="">Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                            @if($errors->has('gender'))
                              @foreach($errors->get('gender') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                   

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile" 
                            value="{{old('roll_nbr')}}">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Upload Pic</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="pic">
                          </div>
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