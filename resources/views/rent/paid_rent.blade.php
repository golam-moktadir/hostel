@extends('layout')
@section('content')

        <div class="row">
            <div class="col-lg-12">
            <h3 class="text-center" style="color: #2559ee">Monthly Seat Fee</h3>
            <hr />
          
            @php($message=Session::get('message'))

            @if(isset($message))
              {!!"<div class='alert alert-success'>".$message."</div>"!!}
              @php(Session::forget('message'))
            @endif
         <a href="{{URL::to('rent')}}"><h3 class="box-title  btn btn-primary"><i class="fa fa-plus"></i> Add New</h3><br><br></a>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Mobile</th>
                                  <th>Year</th>
                                  <th>Month</th>
                                  <th>Paid</th>
                                  <th>Due</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($value as $data)            
                                <tr>
                                  <td>{{$i++ }}</td>
                                  <td>
                                    
                                      @foreach($students as $student)
                                         @if($data->student_id == $student->id) 
                                             {{$student->name}}
                                         @endif
                                       @endforeach
                                    
                                  </td>
                                  <td>
                                      @foreach($students as $student)
                                         @if($data->student_id == $student->id) 
                                             {{$student->mobile_number}}
                                         @endif
                                       @endforeach
                                  </td>
                                  <td>{{$data->year}}</td>
                                  <td>{{$data->month}}</td>
                                  <td>{{$data->month_fee}}</td>
                                  <td>{{$data->due}}</td>
                                  <td>
                                    <a href="{{url('edit_rent/'.$data->unique_id)}}" class="btn btn-success btn-xs">Edit</a>
                                    <?php 
                                      if($data->due == 'No due')
                                        echo "<button class='btn btn-warning btn-xs' disabled>Paid</button>";
                                      else{
                                    ?>
                                    <a href="{{url('due_pay/'.$data->unique_id)}}" class="btn btn-info btn-xs">Due Pay</a>
                                  <?php } ?>
                                    <a href="{{url('delete_paid_fee/'.$data->unique_id)}}" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure??')">Del.</a>
                                  </td>
                                </tr>
                              @endforeach                      
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                       
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
@endsection  
