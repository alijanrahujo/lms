<!--Create New Section-->

     @extends('layouts.dashboard.master')

      @section('content')
            <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row flex-grow">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h5>Edit Section</h5>
                </div>
                <div class="card-body">
                 
                  <form class="form-sample" action="{{route('sections.update',$Sections->id)}}" method="POST">
                    @csrf
                    @method('PATCH')

                    <p class="card-description">
                      Section info
                    </p>

                    <div class="row">
                     <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Section Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="section_name" 
                            value="{{$Sections->section_name}}">
                            @if($errors->has('section_name'))
                              @foreach($errors->get('section_name') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Category</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="category" 
                            value="{{$Sections->category}}">
                          </div>
                        </div>
                      </div>
                    </div>

                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Select Teacher</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="teacher">
                              @foreach($Teachers as $Teacher)
                              <option value="{{$Teacher->id}}" {{$Teacher->id == $Sections->teacher ? 'selected' : ''}}>{{$Teacher->teacher_name}}</option>
                              @endforeach
                            </select>
                            @if($errors->has('teacher'))
                              @foreach($errors->get('teacher') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>

                        <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Select Class</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="class">
                              @foreach($Classes as $Class)
                              <option value="{{$Class->id}}" {{$Class->id == $Sections->class_name ? 'selected' : ''}}>{{$Class->class_name}}</option>
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
                    </div>

                   

                    <button type="submit" class="btn btn-success mr-2">Update</button>

               
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 

        @endsection    