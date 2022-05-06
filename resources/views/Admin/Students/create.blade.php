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
                 
                  <form class="form-sample" action="{{route('students.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <p class="card-description">
                      Personal info
                    </p>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Student Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="student_name" 
                            value="{{old('student_name')}}">
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
                          <label class="col-sm-3 col-form-label">Mother Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mother_name" 
                            value="{{old('mother_name')}}">
                          </div>
                        </div>
                      </div>
                     <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="Date" class="form-control" placeholder="dd/mm/yyyy" name="dob" value="{{old('dob')}}">
                            @if($errors->has('dob'))
                              @foreach($errors->get('dob') as $error)
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
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile No</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile" 
                            value="{{old('mobile')}}">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Select Class</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="class_name">
                              <option value="">Select Class</option>
                             @foreach($Classes as $Class)
                              <option value="{{$Class->id}}">{{$Class->class_name}}</option>
                             @endforeach
                            </select>
                            @if($errors->has('class_name'))
                              @foreach($errors->get('class_name') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Select Section</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="section">
                              <option value="">Select Section</option>
                             @foreach($Sections as $Section)
                              <option value="{{$Section->id}}">{{$Section->section_name}}</option>
                             @endforeach
                            </select>
                            @if($errors->has('section'))
                              @foreach($errors->get('section') as $error)
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
                          <label class="col-sm-3 col-form-label">Roll Number </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="roll_nbr" 
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

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Monthly Fees</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="fee" 
                            value="{{old('fee')}}">
                            @if($errors->has('fees'))
                              @foreach($errors->get('fees') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Status</label>
                          <div class="col-sm-4">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="Active" checked=""> Active
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="status" id="membershipRadios2" value="De-Active"> De-Active
                              </label>
                            </div>
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