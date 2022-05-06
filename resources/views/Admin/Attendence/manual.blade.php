<!--Create New Subject-->

     @extends('layouts.dashboard.master')

      @section('content')
            <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row flex-grow">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h5>Manual Attendence</h5>
                </div>
                <div class="card-body"  style="background-color:#e7eaed">
                 
                  <form class="form-sample" action="{{route('attendence.store')}}" method="POST">
                    @csrf
                  

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Employee</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="emp_id" required="">
                              <option value="">Select Empolyee</option>
                              @foreach($internees as $internee)
                              <option value="{{$internee->emp_id}}">{{$internee->name}}</option>
                              @endforeach
                            </select>
                            @if($errors->has('class'))
                              @foreach($errors->get('class') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Remarks</label>
                          <div class="col-sm-9">
                           <input type="text" name="remarks" class="form-control" value="">
                            @if($errors->has('subject'))
                              @foreach($errors->get('subject') as $error)
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
                          <label class="col-sm-3 col-form-label">Time In</label>
                          <div class="col-sm-9">
                            <input type="time" class="form-control" name="time_in" 
                            value="{{old('time_in')}}">
                            @if($errors->has('subject'))
                              @foreach($errors->get('subject') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Time Out</label>
                          <div class="col-sm-9">
                             <input type="time" class="form-control" name="time_out" 
                            value="{{old('time_out')}}">
                            @if($errors->has('teacher'))
                              @foreach($errors->get('teacher') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                    </div>

                   

                    <button type="submit" class="btn btn-success mr-2">Save</button>

               
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 

        @endsection    