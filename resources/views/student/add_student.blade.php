@extends('layout')
@section('content')

        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center" style="color: #2559ee">Add Student Info</h3>
                <hr />
            </div>
        </div>
         <form action="{{url('insert_student')}}" method="post" enctype="multipart/form-data">
           {{csrf_field()}} 
          <div class="row">  
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Student Name :<font color="red" size="4">*</font> </label>
                <input name="name" type="text" class="form-control" placeholder="Full Name">
            </div>                                                          
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Sex : <font color="red" size="4">*</font></label>
                <select class="form-control" name="sex" required>
                    <option value=""> - select - </option>
                    <option value="Male">Male</option>
                    <option value="Female"> Female</option>
                    <option value="Others">Others</option>
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
                            
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                        </select>
                </div>                                                          
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                     <label for="">Shift: <font color="red" size="4">*</font> </label>
                     <select name="shift" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="Morning">Morning</option> 
                             <option value="Day">Day</option> 
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
                             <option value="A">A</option> 
                             <option value="B">B</option> 
                             <option value="C">C</option> 
                             <option value="D">D</option> 
                         </select>      
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                         <label for="">Class Roll: <font color="red" size="4">*</font> </label>
                         <input type="text" placeholder="Enter Class Roll.." class="form-control" name="class_roll" required>  
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
                            <input type="text" name="birthday" class="form-control ng-invalid ng-invalid-required" ng-model="model.date" placeholder="Enter Birthday" required>
                        </div>
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                         <label for="">Blood Group <font color="red" size="4">*</font> </label>
                            <select name="blood_group" class="form-control" required>
                             <option value="">--Select--</option>
                             <option value="A+">A+</option> 
                             <option value="A-">A-</option> 
                             <option value="B+">B+</option> 
                             <option value="B-">B-</option> 
                             <option value="O+">O+</option> 
                             <option value="O-">O-</option> 
                             <option value="AB+">AB+</option> 
                             <option value="AB-">AB-</option> 
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
                             <option value="Islam">Islam</option> 
                             <option value="Hindu">Hindu</option> 
                             <option value="Buddhist">Buddhist</option> 
                             <option value="Cristian">Cristian</option> 
                         </select>      
                    </div>                                                         
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Mobile Number <font color="red" size="4">*</font> </label>
                        <input type="text" class="form-control" name="mobile_number" placeholder="Enter Mobile Number" required>      
                    </div>                                                         
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Father Name:<font color="red" size="4">*</font> </label>
                        <input type="text" class="form-control" name="father_name" placeholder="Enter Father Name" required>      
                    </div>                                                        
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Mother Name:<font color="red" size="4">*</font> </label>
                        <input type="text" class="form-control" name="mother_name" placeholder="Enter Mother Name" required>      
                    </div>                                                         
                </div>
            </div>
            <h3 class="text-center" style="color: #2559ee">Address </h3>
            <hr />
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Village <font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter Village" class="form-control" name="village" required>        
                    </div>                                                         
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="form-group">
                       <label for="">Post Office<font color="red" size="4">*</font> </label>
                       <input type="text" placeholder="Enter Post Office" class="form-control" name="post_office" required>  
                    </div>                                                          
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="form-group">
                       <label for="">Post Code:<font color="red" size="4">*</font> </label>
                       <input type="text" placeholder="Enter Post Code" class="form-control" name="post_code" required>  
                    </div>                                                          
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="">Thana: <font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter Thana" class="form-control" name="thana" required>         
                    </div>                                                         
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                     <div class="form-group">
                       <label for="">District: <font color="red" size="4">*</font> </label>
                        <input type="text" placeholder="Enter District" class="form-control" name="district" required>   
                    </div>                                                          
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for=""> Guardian Mobile Number: <font color="red" size="4">*</font> </label>
                        <input type="text" class="form-control" name="guardian_number" placeholder="Enter Guardian Mobile Number" required>      
                    </div>                                                         
                </div>
            </div>
            <div class="row">  
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for=""> Image :<font color="red" size="4">*</font> </label>
                            <input type='file' id="image" required name="image"  onchange="readURL(this);" />
                           <br> <img id="blah" src="#" alt=" " />         
                    </div>                                                         
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-adress">
                        <input type="submit" name="submit" class="btn btn-primary waves-effect waves-light" value="Submit"/>
                    </div>
                </div>
            </div>
          </form>                       
         
@endsection