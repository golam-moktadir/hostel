@extends('layout')
@section('content')
	    <div class="row">
		    <div class="col-lg-12">
		    	<h3 class="text-center" style="color: #2559ee">Meal Calculation View</h3>
		    	<hr />
			</div>
	    </div>
        <button onclick="printContent('print_area')" class="btn btn-info">Print</button>
        <br><br>
          <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="print_area">   
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
                                <td><b>Total Shopping</b></td>
                                <td>{{$total_shopping}}</td>
                            </tr>
                            <tr class="danger">
                                <td><b>Year</b></td>
                                <td>{{Session::get('year')}} </td>
                                <td><b>Month</b></td>
                                <td>{{Session::get('month')}}</td>
                            </tr>
                            <tr class="info">
                                <td><b>Mobile Number</b></td>
                                <td>{{$student->mobile_number}}</td>
                                <td><b>Total Meal<b></td>
                                <td>{{$total_meal}}</td>
                            </tr>
                            <tr class="warning">
                                <td><b>Given Fee</b></td>
                                <td>{{$nijer_fee}}</td>
                                <td><b>Your meal</b></td>
                                <td>{{$nijer_meal}}</td>
                            </tr>
                            <tr class="success">
                                <td><b>Per meal rate </b></td>
                                <td>{{$per_meal_rate = round($total_shopping / $total_meal,2)}}</td>
                                <td><b>Your Total Fee</b></td>
                                <td>{{$own_total_fee = $per_meal_rate * $nijer_meal}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>                            <!-- /.table-responsive -->        
                        <!-- /.panel-body -->
                </div>       
                    @if($own_total_fee > $nijer_fee)
                    <p>Due :  {{$own_total_fee - $nijer_fee}}  </p> 
                    @else
                  <p>You Will Get :  {{$nijer_fee - $own_total_fee}}  </p>
                    @endif
            </div>
          </div>
           <script>
            function printContent(el){
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
            }
            </script> 
@endsection