    <!--Create new Teacher-->

     @extends('layouts.dashboard.master')

      @section('content')
            <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row flex-grow">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h5>Edit Teacher</h5>
                </div>
                <div class="card-body">
                   
                  <form class="form-sample" action="{{route('teachers.update',$teacher->id)}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PATCH')

                    <p class="card-description">
                      Personal info
                    </p>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="teacher_name" value="{{$teacher->teacher_name}}">
                            @if($errors->has('teacher_name'))
                              @foreach($errors->get('teacher_name') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Education</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="education" 
                            value="{{$teacher->education}}">
                            @if($errors->has('education'))
                              @foreach($errors->get('education') as $error)
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
                              <option value="Male" {{'Male' == $teacher->gender ? 'selected' : ''}}>Male</option>
                              <option value="Female" {{'Female' == $teacher->gender ? 'selected' : ''}}>Female</option>
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
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="Date" class="form-control" placeholder="dd/mm/yyyy" name="dob" value="{{$teacher->dob}}">
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
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" 
                            value="{{$teacher->address}}">
                            @if($errors->has('address'))
                              @foreach($errors->get('address') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" 
                            value="{{$teacher->email}}">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Mobile </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile" 
                            value="{{$teacher->mobile}}">
                            @if($errors->has('mobile'))
                              @foreach($errors->get('mobile') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Upload Pic</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="pic" value="{{old('pic')}}">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee ID</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="emp_id" 
                            value="{{$teacher->emp_id}}">
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

                   
                    <button type="submit" class="btn btn-success mr-2">Update</button>

               
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 

        @endsection    