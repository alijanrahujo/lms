<!--Create New Section-->

     @extends('layouts.dashboard.master')

      @section('content')
            <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row flex-grow">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h5>Add New Role</h5>
                </div>
                <div class="card-body">
                 
                  <form class="form-sample" action="{{route('roles.store')}}" method="POST">
                    @csrf
                    <p class="card-description">
                      Role info
                    </p>

                    <div class="row">
                     <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Roll</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="name">
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Permission:</strong>
<br/>
@foreach($permission as $value)
<label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
{{ $value->name }}</label>
<br/>
@endforeach
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