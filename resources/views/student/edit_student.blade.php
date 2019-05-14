@extends('layout')
@section('content')

        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center" style="color: #2559ee">Edit Student Info</h3>
                <hr />
            </div>
        </div>
         <form action="{{url('update_student')}}" method="post" enctype="multipart/form-data">
           {{csrf_field()}} 
          <div class="row">  
           <input type="hidden" name="id" value="<?php echo $data->unique_id ?>"> 
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Student Name :<font color="red" size="4">*</font> </label>
                <input name="name" type="text" class="form-control" value="<?php echo $data->name ?>">
            </div>                                                          
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Sex : <font color="red" size="4">*</font></label>
                <select class="form-control" name="sex" required>
                    <option value=""> - select - </option>
                    <option value="Male" {{($data->sex == 'Male')?"selected":""}}>Male</option>
                    <option value="Female" {{($data->sex == 'Female')?"selected":""}}>Female</option>
                    <option value="Others" {{($data->sex == 'Others')?"selected":""}}>Others</option>
                </select>
            </div>                                                          
           </div>
          </div>
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="">Class: <font color="red" size="4">*</font> </label>
                        <select class="form-control" name="class" required>
                            <option value="">--Select--</option>
                            
                                @for($i = 1; $i<= 11; $i++){
                            
                                <option value="{{$i}}" {{($data->class == $i)?"selected":""}}>{{$i}}</option>
                                @endfor
                        </select>
                </div>                                                          
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                     <label for="">Shift: <font color="red" size="4">*</font> </label>
                     <select name="shift" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="Morning" <?php if($data->shift == 'Morning') echo "selected" ?> >Morning</option> 
                             <option value="Day" {{($data->shift == 'Day')?"selected":""}}>Day</option>
                    </select>
                </div>                                                          
            </div>
           </div>
           <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Branch: <font color="red" size="4">*</font> </label>
                        <select name="branch" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="A" {{($data->branch == 'A')?"selected":""}}>A</option> 
                             <option value="B" {{($data->branch == 'B')?"selected":""}}>B</option> 
                             <option value="C" {{($data->branch == 'C')?"selected":""}}>C</option> 
                             <option value="D" {{($data->branch == 'D')?"selected":""}}>D</option> 
                         </select>      
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                         <label for="">Class Roll: <font color="red" size="4">*</font> </label>
                         <input type="text" value="<?php echo $data->class_roll ?>" class="form-control" name="class_roll" required>   
                    </div>                                                          
                </div>
            </div>
            <h3 class="text-center" style="color: #2559ee">Personal Information </h3>
            <hr />
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group data-custon-pick" id="data_1">
                        <label for="">Date of Birth <font color="red" size="4">*</font> </label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="text" name="birthday" class="form-control ng-invalid ng-invalid-required" ng-model="model.date" value="<?php echo $data->birthday ?>" required>
                        </div>
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                         <label for="">Blood Group <font color="red" size="4">*</font> </label>
                            <select name="blood_group" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="A+" {{($data->blood_group == 'A+')?"selected":""}}>A+</option> 
                             <option value="A-" {{($data->blood_group == 'A-')?"selected":""}}>A-</option> 
                             <option value="B+" {{($data->blood_group == 'B+')?"selected":""}}>B+</option> 
                             <option value="B-" {{($data->blood_group == 'B-')?"selected":""}}>B-</option> 
                             <option value="O+" {{($data->blood_group == 'O+')?"selected":""}}>O+</option> 
                             <option value="O-" {{($data->blood_group == 'O-')?"selected":""}}>O-</option> 
                             <option value="AB+" {{($data->blood_group == 'AB+')?"selected":""}}>AB+</option> 
                             <option value="AB-" {{($data->blood_group == 'AB-')?"selected":""}}>AB-</option> 
                           </select>
                    </div>                                                          
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Religion <font color="red" size="4">*</font> </label>
                        <select name="religion" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="Islam" {{($data->religion == 'Islam')?"selected":"" }}>Islam</option> 
                             <option value="Hindu" {{($data->religion == 'Hindu')?"selected":"" }}>Hindu</option> 
                             <option value="Buddhist" {{($data->religion == 'Buddhist')?"selected":"" }}>Buddhist</option> 
                             <option value="Cristian" {{($data->religion == 'Cristian')?"selected":"" }}>Cristian</option> 
                         </select>      
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Mobile Number <font color="red" size="4">*</font> </label>
                        <input type="text" class="form-control" name="mobile_number" value="{{ $data->mobile_number}}" required>      
                    </div>                                                         
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Father Name:<font color="red" size="4">*</font> </label>
                     <input type="text" class="form-control" name="father_name" value="{{$data->father_name}}" required>       
                    </div>                                                        
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Mother Name:<font color="red" size="4">*</font> </label>
                        <input type="text" class="form-control" name="mother_name" value="{{$data->mother_name}}" required>      
                    </div>                                                         
                </div>
            </div>
            <h3 class="text-center" style="color: #2559ee">Address </h3>
            <hr />
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Village <font color="red" size="4">*</font> </label>
                         <input type="text" value="{{$data->village}}" class="form-control" name="village" required>        
                    </div>                                                         
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="form-group">
                       <label for="">Post Office<font color="red" size="4">*</font> </label>
                       <input type="text" value="{{$data->post_office}}" class="form-control" name="post_office" required>   
                    </div>                                                          
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="form-group">
                       <label for="">Post Code:<font color="red" size="4">*</font> </label>
                       <input type="text" value="{{$data->post_code}}" class="form-control" name="post_code" required>  
                    </div>                                                          
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="">Thana: <font color="red" size="4">*</font> </label>
                        <input type="text" value="{{$data->thana}}" class="form-control" name="thana" required>         
                    </div>                                                         
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="form-group">
                       <label for="">District: <font color="red" size="4">*</font> </label>
                        <input type="text" value="{{$data->district}}" class="form-control" name="district" required>   
                    </div>                                                          
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for=""> Guardian Mobile Number: <font color="red" size="4">*</font> </label>
                        <input type="text" class="form-control" name="guardian_number" value="{{ $data->guardian_number}}" required>      
                    </div>                                                         
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for=""> Image :<font color="red" size="4">*</font> </label>
                            <img src="{{URL('upload/'.$data->image)}}" width="120" height="150">
                            <input type='file' id="image" name="image"  onchange="readURL(this);" />
                           <br> <img id="blah" src="#" alt=" " />         
                    </div>                                                         
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <input type="submit" name="submit" class="btn btn-primary waves-effect waves-light" value="Update"/>
                    </div>
                </div>
            </div>
          </form>                       
         
@endsection