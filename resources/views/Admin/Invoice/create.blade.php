<!--Add New Parent-->

@extends('layouts.dashboard.master')

@section('content')

      <div class="main-panel">
  <div class="content-wrapper">
    
    <div class="row flex-grow">
     <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-header">
            <h5>Add Invoice</h5>
          </div>
          <div class="card-body">
           
            <form class="form-sample" action="{{route('fathers.store')}}" method="POST">
              @csrf
             <div class="row">
                <div class="col-md-3">
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

                <div class="col-md-3">
                  <div class="form-group row">
                    <label class="col-sm-12 col-form-label">Section</label>
                    <div class="col-sm-12">
                        <select class="form-control session" name="session">
                              <option value="">Select Session</option>
                        </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-3">
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

                <div class="col-md-3">
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

              <div class="row">
                <div class="col-12 table-responsive">
                    <style>
                        .table th, .table td
                        {
                            padding: 10px 10px;
                        }
                        .t_head
                        {
                          background-color: #0a003a;
                          color:white;
                        }
                    </style>
                  <table class="table table-bordered " id="student" style="padding: 0;" cellpadding="0" >
                    <thead>
                      <tr class="t_head">
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Father Name</th>
                        <th class="type_h">Dues</th>
                        <th>Discount</th>
                        <th>Subtotal</th>
                        <th>Actions</th>
                      </tr>
    
                    </thead>
                    <tbody id="result" class="del">
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row my-4">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-info mr-2">Save</button>
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
          $("#result").html("");

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
          var sr=0;
          var student_data = "";
            $.ajax({
                type:'GET',
                url:"{{ route('session_ajax','') }}/"+session_id,
                success:function(data){
                    console.log(data);
                    $.each(data,function(key,value){
                        sr++;
                        randID = Math.floor(Math.random() * Math.floor(9999999999999999));
                        student_data +='<tr id="id_'+randID+'"><td>'+sr+'</td><td>'+value.student_name+'</td><td>'+value.father_name+'</td><td class="type_data"><input type="text" name="dues[]" value="" class="form-control" disabled></td><td><input type="text" name="discount[]" value="" class="form-control"></td><td><input type="text" name="subtotal[]" value="" class="form-control" disabled></td><td><a href="#" class="badge badge-danger del" data-feetype-id="'+randID+'"><i class="fa fa-trash-o fa-lg"></i></a></td></tr>';
                    })
                    $("#result").html(student_data);
                }
            });
      })

      var sr = 0;
      $("#fee_type").change(function(){
        var fee_type =  $(this).find(":selected").text();
        var class_id=$(".class").val();
        var session_id=$(".session").val();

        var myclass = fee_type.replace(" ", "");
        $('.type_h').after('<th data-type="'+fee_type+'">'+fee_type+'</th>');
        $('.type_data').after('<td data-type="'+fee_type+'"><input type="text" class="form-control '+myclass+'" name="'+fee_type+'[]"></td>');

        $.ajax({
            url: '{{ route("invoice_ajax","1") }}',
            method: "POST",
            data: {class_id:class_id,session_id:session_id,fee_type:fee_type, _token:'{{csrf_token()}}'},
            success: function (data)
            {
              var i =0;
              $("."+myclass).each(function(){
                $(this).val(data.fee[i]);
                i++;
              })
            }
        });

        

      });
  </script>

  @endsection

 
 