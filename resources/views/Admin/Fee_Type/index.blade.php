<!-- Admin/Class Index-->
@extends('layouts.dashboard.master')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">
     @if($errors->has('fee_type'))
      @foreach($errors->get('fee_type') as $error)
        <p style="color: red;">{{$error}}</p>
      @endforeach
    @endif
    <div class="card">
      <div class="card-header">
                  <h5>Fees Type</h5>
      </div>
      <div class="card-body">
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@mdo">+Add</button>
                  <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-4" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-4">Fees Type</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                       
                          <form method="POST" action="{{ route('fee_type.store') }}" enctype="multipart/form-data">
                            @csrf
                          
                            <div class="row form-group">
                              <label class="col-sm-12 col-form-label">Fee Type</label>
                              <div class="col-sm-12">
                                <select name="type" class="form-control fee_type">
                                  <option value="">Select Fee Type</option>
                                  <option>Monthly Fee</option>
                                  <option>Additional Fee</option>
                                </select>
                              </div>
                            </div>

                            <div class="row form-group">
                              <label class="col-sm-12 col-form-label">Title</label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" id="message-text" name="fee_type">
                              </div>
                            </div>

                            <div class="row form-group fee">
                              
                            </div>

                            <div class="row form-group">
                              <label class="col-sm-12 col-form-label">Note</label>
                              <div class="col-sm-12">
                                <input type="text" class="form-control" id="message-text" name="note">
                              </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Save</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
             
          
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Fee Type</th>
                        <th>Fee</th>
                        <th>Note</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($fee_type as $fee_type)
                      <tr>
                        <td>{{$fee_type->id}}</td>
                        <td>{{$fee_type->fee_type}}</td>
                        <td>{{$fee_type->fee}}</td>
                        <td>{{$fee_type->note}}</td>
                       
                        <td>
                          <a href="#" class="badge badge-primary"><i class="fa fa-edit fa-lg"></i></a>&nbsp; 
                          <a href="#" class="badge badge-danger"><i class="fa fa-trash-o fa-lg"></i></a>&nbsp;
                          <a href="#" class="badge badge-success"><i class="fa fa-eye fa-lg"></i></a>
                        </td>
                      @endforeach
              
        
             
                    </tbody>
                  </table>
                </div>
      </div>
    </div>
  </div>
</div>

<script>
  $('.fee_type').change(function(){
    if($(this).val() == 'Additional Fee')
    {
      $('.fee').html('<label class="col-sm-12 col-form-label">Fee</label><div class="col-sm-12"><input type="number" class="form-control" id="message-text" name="fee"></div>');
    }
    else
    {
      $('.fee').html('');
    }
  });
</script>
@endsection

