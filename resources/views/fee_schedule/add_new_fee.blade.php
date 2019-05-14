@extends('layout')
@section('content')

      <div class="row">
        <div class="col-lg-12">
          <h3 class="text-center" style="color: #2559ee">Add New Fee</h3>
          <hr />
      </div>
      </div>
         <form action="{{url('insert_fee_schedule')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Seat Range:<font color="red" size="4">*</font> </label>
                <input type="number" class="form-control" name="seat_range" placeholder="Enter New Seat Range" required>
            </div>                                                          
           </div>
          </div>
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Wifi Fee: <font color="red" size="4">*</font> </label>
                <input type="number" class="form-control" name="wifi" placeholder="Enter Wifi Fee" required>      
             </div>                                                          
            </div>
           </div>
           <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Current Bill: <font color="red" size="4">*</font> </label>
                        <input type="number" class="form-control" name="current" placeholder="Enter Current Bill" required>      
                    </div>                                                         
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <input type="submit" class="btn btn-primary name="submit" value="Submit" waves-effect waves-light">
                    </div>
                </div>
            </div>
          </form>                       
@endsection
