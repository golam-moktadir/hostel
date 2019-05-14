@extends('layout')
@section('content')

        <div class="row">
            <div class="col-lg-12">
            <h3 class="text-center" style="color: #2559ee">Daily Shopping </h3>
            <hr />
         
            @php($message=Session::get('message'))

            @if(isset($message))
              {!!"<div class='alert alert-success'>".$message."</div>"!!}
              @php(Session::forget('message'))
            @endif  
            <a href="{{URL::to('shopping_entry')}}"><h3 class="box-title  btn btn-primary"><i class="fa fa-plus"></i> Add New</h3><br><br></a>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Year</th>
                                  <th>Month</th>
                                  <th>Date</th>
                                  <th>Shopping Cost</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php
                                $i = 1;
                                foreach($value as $data){
                              ?>  
                                <tr>
                                  <td><?php echo $i++ ?></td>
                                  <td><?php echo $data->year ?></td>
                                  <td><?php echo $data->month ?></td>
                                  <td><?php echo $data->days ?></td>
                                  <td><?php echo $data->shopping_cost ?></td>
                                  <td>
                                    <a href="{{url('edit_shopping/'.$data->unique_id)}}" class="btn btn-success btn-xs">Edit</a>
                                    <a href="{{url('delete_shopping/'.$data->unique_id)}}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure??')">Delete</a>
                                  </td>
                                </tr>
                              <?php } ?>                       
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
