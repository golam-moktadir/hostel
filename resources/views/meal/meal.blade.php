@extends('layout')
@section('content')

        <div class="row">
            <div class="col-lg-12">
            <h3 class="text-center" style="color: #2559ee">Meal Entry & Fees</h3>
            <hr />
            
            @php($message=Session::get('message'))

            @if(isset($message))
              {!!"<div class='alert alert-success'>".$message."</div>"!!}
              @php(Session::forget('message'))
            @endif
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Class</th>
                                  <th>Mobile</th>
                                  <th>Shift</th>
                                  <th>Class Roll</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                @php($i = 1)
                                @foreach($value as $data)
                                
                                <tr>
                                  <td>{{$i++}}</td>
                                  <td>{{$data->name}}</td>
                                  <td>{{$data->class}}</td>
                                  <td>{{$data->mobile_number}}</td>
                                  <td>{{$data->shift}}</td>
                                  <td>{{$data->class_roll}}</td>
                                  <td>
                                    <a href="{{url('meal_entry/'.$data->unique_id)}}" class="btn btn-info btn-xs">Meal Entry</a>
                                    <a href="{{url('meal_fee/'.$data->unique_id)}}" class="btn btn-success btn-xs">Meal Fee</a>
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
