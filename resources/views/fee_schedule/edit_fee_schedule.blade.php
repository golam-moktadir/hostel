@extends('layout')
@section('content')

      <div class="row">
        <div class="col-lg-12">
          <h3 class="text-center" style="color: #2559ee">Edit Form</h3>
          <hr />
      </div>
      </div>
         <form action="{{url('update_fee_schedule')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$data->unique_id }}">
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Seat Range:<font color="red" size="4">*</font> </label>
                <input type="number" class="form-control" name="seat_range" value="{{$data->seat_range}}" required>
            </div>                                                          
           </div>
          </div>
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Wifi Fee: <font color="red" size="4">*</font> </label>
                <input type="number" class="form-control" name="wifi" value="{{$data->wifi }}" required>      
             </div>                                                          
            </div>
           </div>
           <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Current Bill: <font color="red" size="4">*</font> </label>
                        <input type="number" class="form-control" name="current" value="{{$data->current }}" required>      
                    </div>                                                         
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <input type="submit" class="btn btn-primary name="submit" value="Update" waves-effect waves-light">
                    </div>
                </div>
            </div>
          </form>                       
@endsection
