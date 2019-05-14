@extends('layout')
@section('content')  
    <div class="row">
            <div class="col-lg-12">
              <h3 class="text-center" style="color: #2559ee">Student Profile</h3>
              <hr />
            </div>
    </div>
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr class="success">
                                            <td>Student Name</td>
                                            <td>{{$data->name}}</td>

                                        </tr>
                                        <tr class="primary">
                                            <td>Sex</td>
                                            <td>{{$data->sex}}</td>
                                        </tr>
                                        <tr class="success">
                                            <td>Class</td>
                                            <td>{{$data->class}}</td>
                                        </tr>
                                        <tr class="primary">
                                            <td>Shift</td>
                                            <td>{{$data->shift}}</td>
                                        </tr>
                                        <tr class="success">
                                            <td>Section</td>
                                            <td>{{$data->branch}}</td>
                                        </tr>
                                        <tr class="primary">
                                            <td>Roll Number</td>
                                            <td>{{$data->class_roll}}</td>
                                        </tr>
                                        <tr class="success">
                                            <td>Date of Birth</td>
                                            <td>{{$data->birthday}}</td>
                                        </tr>
                                        <tr class="primary">
                                            <td>Blood Group</td>
                                            <td>{{$data->blood_group}}</td>
                                        </tr> 
                                         <tr class="success">
                                            <td>Religion</td>
                                            <td>{{$data->religion}}</td>
                                        </tr>
                                        <tr class="primary">
                                            <td>Mobile Number</td>
                                            <td>{{$data->mobile_number}}</td>
                                        </tr>
                                        <tr class="success">
                                            <td>Father Name</td>
                                            <td>{{$data->father_name}}</td>
                                        </tr>
                                         <tr class="primary">
                                            <td>Mother Name</td>
                                            <td>{{$data->mother_name}}</td>
                                        </tr> 
                                        <tr class="success">
                                            <td>Village</td>
                                            <td>{{$data->village}}</td>
                                        </tr> 
                                        <tr class="primary">
                                            <td>Post Office</td>
                                            <td>{{$data->post_office}}</td>
                                        </tr>
                                        <tr class="success">
                                            <td>Post Code</td>
                                            <td>{{$data->post_code}}</td>
                                        </tr>  
                                        <tr class="primary">
                                            <td>Thana</td>
                                            <td>{{$data->thana}}</td>
                                        </tr>
                                        <tr class="success">
                                            <td>District</td>
                                            <td>{{$data->district}}</td>
                                        </tr>
                                        <tr class="primary">
                                            <td>Guardian Number</td>
                                            <td>{{$data->guardian_number}}</td>
                                        </tr>                  
                                    </tbody>
                                </table>
                            </div>                                                         
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
               <img class="img img-responsive" src="{{URL('upload/'.$data->image)}}" width='200' height='200'>                                                       
           </div>
          </div>
    @endsection