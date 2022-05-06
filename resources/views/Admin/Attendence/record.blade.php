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
                 
                  <form class="form-sample" action="{{route('record')}}" method="POST">
                    @csrf
                  
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Employee ID#</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="emp_id">                          
                          </div>
                        </div>
                      </div>
                    </div>          
                            
                     

                   

                    <button type="submit" class="btn btn-success mr-2">Search</button>

               
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 

        @endsection    