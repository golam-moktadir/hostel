@extends('layout')
@section('content')

        <div class="row">
            <div class="col-lg-12">
            <h3 class="text-center" style="color: #2559ee">Fee Schedule</h3>
            <hr />
         
            @php($message=Session::get('message'))

          @if(isset($message))
            {!!"<div class='alert alert-success'>".$message."</div>"!!}
            @php(Session::forget('message'))
          @endif
      
            <a href="{{url('/add_fee_schedule')}}"><h3 class="box-title  btn btn-primary"><i class="fa fa-plus"></i> Add New</h3><br><br></a>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Seat Range</th>
                                  <th>Wife</th>
                                  <th>Current Bill</th>
                                  <th>Total</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($value as $data)                                
                                <tr>
                                  <td>{{$i++}}</td>
                                  <td>{{$data->seat_range}}</td>
                                  <td>{{$data->wifi}}</td>
                                  <td>{{$data->current}}</td>
                                  <td>{{$data->total_fee}}</td>
                                  <td>
                                    <a href="{{url('edit_fee_schedule/'.$data->unique_id)}}" class="btn btn-success btn-xs">Edit</a>
                                    <a href="{{url('delete_fee_schedule/'.$data->unique_id)}}" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure??')">Delete</a>
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
        
    </div>
@endsection    