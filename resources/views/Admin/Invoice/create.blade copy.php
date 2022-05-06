<!--Add New Parent-->

@extends('layouts.dashboard.master')

@section('content')
      <div class="main-panel">
  <div class="content-wrapper">
    
    <div class="row flex-grow">
     <div class="col-3 grid-margin">
        <div class="card">
          <div class="card-header">
            <h5>Add New Parent</h5>
          </div>
          <div class="card-body">
           
            <form class="form-sample" action="{{route('fathers.store')}}" method="POST">
              @csrf
             <div class="row">
                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Class</label>
                    <div class="col-sm-12">
                        <select class="form-control class" name="class">
                              <option value="">Select Class</option>
                              @foreach($classes as $class)
                              <option value="{{$class->id}}">{{$class->class_name}}</option>
                              @endforeach
                        </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Section</label>
                    <div class="col-sm-12">
                        <select class="form-control session" name="session">
                              <option value="">Select Session</option>
                        </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Student</label>
                    <div class="col-sm-12">
                        <select class="form-control student" name="student">
                              <option value="">Select Student</option>
                        </select>
                    </div>
                  </div>
                </div>
               
              </div>
             
              <button type="submit" class="btn btn-block btn-success mr-2">Save</button>         
            </form>
          </div>
        </div>
      </div>


      <div class="col-9 grid-margin">
        <div class="card">
          <div class="card-header">
            <h5>Add New Parent</h5>
          </div>
          <div class="card-body">

             <div class="row">
                
             <div class="col-md-12">
                  <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Fee Type</label>
                    <div class="col-sm-12">
                        <select class="form-control" id="fee_type" name="fee_type">
                              <option value="">Select Fee Type</option>
                              @foreach($fee_types as $fee_type)
                              <option value="{{$fee_type->id}}">{{$fee_type->fee_type}}</option>
                              @endforeach
                        </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 table-responsive">
                    <style>
                        .table th, .table td
                        {
                            padding: 10px 10px;
                        }
                    </style>
                  <table class="table table-bordered " style="padding: 0;" cellpadding="0" >
                    <thead>
                      <tr class="bg-success">
                        <th>#</th>
                        <th>Fee Type</th>
                        <th>Amount</th>
                        <th>Discount</th>
                        <th>Subtotal</th>
                        <th>Paid Amount</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="result" class="del">
                    </tbody>
                  </table>
                </div>
              </div>        
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>

      $(".class").change(function(){
          var class_id = $(this).val();
          $(".student").html("<option value=''>Select Student</option>");

          var class_data = "<option value=''>Select Session</option>";
            $.ajax({
                type:'GET',
                url:"{{ route('class_ajax','') }}/"+class_id,
                success:function(data){
                    $.each(data,function(key,value){
                        class_data +="<option value='"+value.id+"'>"+value.section_name+"</option>";
                    })
                    $(".session").html(class_data);
                }
            });
      })

      $(".session").change(function(){
          var session_id = $(this).val();

          var session_data = "<option value=''>Select Student</option>";
            $.ajax({
                type:'GET',
                url:"{{ route('session_ajax','') }}/"+session_id,
                success:function(data){
                    $.each(data,function(key,value){
                        session_data +="<option value='"+value.id+"'>"+value.student_name+"</option>";
                    })
                    $(".student").html(session_data);
                }
            });
      })

      var sr = 0;
      $("#fee_type").change(function(){
          sr++;
          var fee_type =  $(this).find(":selected").text();

          randID = Math.floor(Math.random() * Math.floor(9999999999999999));
          alert(randID);

          data = '<tr id="tr_'+randID+'"><td>'+sr+'</td><td><input type="hidden" class="form-control" name="fee_type" value="'+$(this).val()+'">'+fee_type+'</td><td><input type="number" class="form-control" name="amount"></td><td><input type="number" class="form-control" name="discount"></td><td><input type="number" class="form-control" name="subtotal" disabled></td><td><input type="number" class="form-control" name="paidAmount"></td><td><a href="#" class="badge badge-danger del" data-feetype-id="'+randID+'"><i class="fa fa-trash-o fa-lg"></i></a></td></tr>';
            $("#result").append(data);
      });

      
  </script>

  @endsection

 
 