@extends('layout')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center" style="color: #2559ee">Pay Due Taka</h3>
                <hr />
            </div>
        </div>
         <form action="{{url('update_payment')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="row">  
           <input type="hidden" name="id" value="{{$rent->unique_id}}"> 
           <input type="hidden" name="month_fee" value="{{$rent->month_fee}}">
           <input type="hidden" name="total_fee" value="{{$total_fee->total_fee}}">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  
              <div class="panel panel-default">
                        <!-- /.panel-heading -->      
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr class="success">
                                <td><b>Student Name</b></td>
                                <td>{{$student->name}}</td>
                                <td><b>Class</b></td>
                                <td>{{$student->class}}</td>
                            </tr>
                            <tr class="">
                                <td><b>Shift</b></td>
                                <td>{{$student->shift}}</td>
                                <td><b>Class Roll</b></td>
                                <td>{{$student->class_roll}}</td>
                            </tr>
                            <tr class="warning">
                                <td><b>Section</b></td>
                                <td>{{$student->branch}}</td>
                                <td><b>Total Month Fee</b></td>
                                <td>{{$total_fee->total_fee}}</td>
                            </tr>
                            <tr class="danger">
                                <td><b>Given Fee</b></td>
                                <td>{{$rent->month_fee}}</td>
                                <td><b>Due Taka</b></td>
                                <td>{{$rent->due}}</td>
                            </tr>
                            <tr class="info">
                                <td><b>Mobile Number</b></td><td colspan="3">{{$student->mobile_number}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                            <!-- /.table-responsive -->        
                        <!-- /.panel-body -->
                </div> 
            </div>
          </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="form-group">
                        <label for="">Pay Due Taka:<font color="red" size="4">*</font> </label>
                        <input type="number" class="form-control" name="pay" placeholder="Pay Due Amount..">      
                    </div>                                                         
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                    </div>
                </div>
            </div>
          </form>                       
         </div>
@endsection