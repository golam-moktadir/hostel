@extends('layout')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center" style="color: #2559ee">Edit Hostel Fee</h3>
                <hr />
            </div>
        </div>
         <form action="{{url('update_rent')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="row">  
           <input type="hidden" name="id" value="<?php echo $rent->unique_id ?>"> 
           <input type="hidden" name="total_fee" value="<?php echo $total_fee->total_fee ?>">
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
                        <label for="">Year:<font color="red" size="4">*</font></label>
                        <select name="year" class="form-control" required>
                             <option value="">--Select--</option>
                             
                                @for($year=2018; $year <= date('Y'); $year++)
                             
                             <option value="{{$year}}" {{($rent->year == $year)?"selected":""}}>{{$year}}</option> 
                             @endfor  
                        </select> 
                    </div>                                                        
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Month:<font color="red" size="4">*</font> </label>
                        
                            @php($month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'))
                        <select name="month" class="form-control" required>
                             <option value="">--Select--</option>
                             
                                @foreach($month as $months){
                             
                             <option value="{{$months}}" {{($rent->month == $months)?"selected":""}}>{{$months}}</option> 
                             @endforeach
                        </select> 
                    </div>                                                         
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="form-group">
                        <label for="">Month Fee:<font color="red" size="4">*</font> </label>
                        <input type="number" class="form-control" name="month_fee" value="{{$rent->month_fee}}">      
                    </div>                                                         
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                    </div>
                </div>
            </div>
          </form>                       
         </div>
@endsection