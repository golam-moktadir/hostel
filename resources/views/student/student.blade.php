@extends('layout')
@section('content')
        <div class="row">
            <div class="col-lg-12">
            <h3 class="text-center" style="color: #2559ee">Student Info</h3>
            <hr />
         
           @php($message=Session::get('message'))

            @if(isset($message))
             {!!"<div class='alert alert-success'>".$message."</div>"!!}
              @php(Session::forget('message'))
            @endif 
            <a href="{{URL::to('add_student')}}"><h3 class="box-title  btn btn-primary"><i class="fa fa-plus"></i> Add New</h3><br><br></a>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  <th>Sex</th>
                                  <th>Mobile</th>
                                  <th>Father</th>
                                  <th>Mother</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                @php($i = 1)
                                @foreach($value as $data)
                                
                                <tr>
                                  <td>{{$i++}}</td>
                                  <td>{{$data->name}}</td>
                                  <td>{{$data->sex}}</td>
                                  <td>{{$data->mobile_number}}</td>
                                  <td>{{$data->father_name}}</td>
                                  <td>{{$data->mother_name}}</td>
                                  <td>
                                    <a href="{{URL('edit_student/'.$data->unique_id)}}" class="btn btn-success btn-xs">Edit</a>
                                    <a href="{{url('delete_student/'.$data->unique_id)}}" onclick="return confirm('Are You Sure??Once You delete you will lose all data of this sutdent')" class="btn btn-danger btn-xs">Delete</a>
                                    <a href="{{URL::to('student_profile/'.$data->unique_id)}}" class="btn btn-info btn-xs">Details</a>
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