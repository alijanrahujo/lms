<!--Add New Parent-->

     @extends('layouts.dashboard.master')

      @section('content')
            <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row flex-grow">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h5>Edit Parent</h5>
                </div>
                <div class="card-body">
                 
                  <form class="form-sample" action="{{route('fathers.update',$Parent->id)}}" method="POST">
                    @csrf
                    @method('PATCH')

                    <p class="card-description">
                      Parent Perdonal info
                    </p>

                   <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="father_name" 
                            value="{{$Parent->parent_name}}">
                            @if($errors->has('father_name'))
                              @foreach($errors->get('father_name') as $error)
                                <p style="color: red;">{{$error}}</p>
                              @endforeach
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" 
                            value="{{$Parent->address}}">
                            @if($errors->has('address'))
                              @foreach($errors->get('address') as $error)
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
                          <label class="col-sm-3 col-form-label">Mobile </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile" 
                            value="{{$Parent->mobile}}">
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
                            <input type="file" class="form-control" name="pic">
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