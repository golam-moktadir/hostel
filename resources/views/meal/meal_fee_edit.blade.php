@extends('layout')
@section('content')
	    <div class="row">
		    <div class="col-lg-12">
		    	<h3 class="text-center" style="color: #2559ee">Edit Meal Fee</h3>
		    	<hr />
			</div>
	    </div>
         <form action="{{url('update_meal_fee')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">         
                <div class="panel panel-default">
                        <!-- /.panel-heading -->      
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr class="success">
                                <td><b>Student Name</b></td>
                                <td>{{ $student->name }}</td>
                                <td><b>Class</b></td>
                                <td>{{ $student->class }}</td>
                            </tr>
                            <tr class="">
                                <td><b>Shift</b></td>
                                <td>{{ $student->shift}}</td>
                                <td><b>Class Roll</b></td>
                                <td>{{ $student->class_roll}}</td>
                            </tr>
                            <tr class="warning">
                                <td><b>Section</b></td>
                                <td>{{ $student->branch}}</td>
                                <td><b>Mobile Number</b></td>
                                <td>{{ $student->mobile_number}}</td>
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
                        <input type="hidden" name="id" value="<?php echo $meal_fee->unique_id ?>">
                        <label for="">Year:<font color="red" size="4">*</font> </label>
                        <select name="year" class="form-control" required>
                             <option value="">--Select--</option>
                             
                             	@for($year=2018; $year <= date('Y'); $year++){
                             
                             <option value="{{$year}}" {{($year == $meal_fee->year)?'selected':''}}>{{$year}}</option> 
                             @endfor    
                        </select> 
                    </div>                                                        
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Month:<font color="red" size="4">*</font> </label>
                        
                        	@php($month = array('01'=>'January', '02'=> 'February', '03'=> 'March', '04'=> 'April', '05'=> 'May', '06'=> 'June', '07' => 'July', '08'=>'August' , '09'=> 'September', '10'=> 'October', '11'=>'November', '12'=> 'December'))
                        
                        <select name="month" class="form-control" required>
                             <option value="">--Select--</option>
                             
                             	@foreach($month as $key => $months)
                             
                             <option value="{{$months}}" {{($meal_fee->month == $months)?'selected':''}}>{{$months}}</option> 
                             @endforeach
                        </select> 
                    </div>                                                         
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                   <div class="form-group">
                        <label for="">Meel Fee:<font color="red" size="4">*</font> </label>
                        <input type="number" class="form-control" name="meal_fee" value="{{$meal_fee->meal_fee}}">      
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