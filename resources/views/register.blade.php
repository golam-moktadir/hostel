<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('public/vendor')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('public/vendor')}}/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{asset('public/vendor')}}/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('public/vendor')}}/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/dist')}}/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/vendor')}}/bootstrap/css/datapicker/datepicker3.css">
    <!-- Custom Fonts -->
    <link href="{{asset('public/vendor')}}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    @if(Session::has('message'))
                      {!!"<div class='alert alert-success'>".Session::get('message')."</div>"!!}
                    @endif
                    <div class="panel-body">
                        <form role="form" action="{{url('register_data')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input class="form-control" placeholder="First Name" name="firstname" type="text">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="lastname" type="text">
                                </div>
                              </div>
                            </div>
                                <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mobile Number" name="mobile_no" type="text">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password">
                                </div>
                              </div>
                            </div>
                                <input type="submit" name="submit" value="Save" class="btn btn-success" />            
                        </form>
                         <br>
                        <div class="text-center">
                          <a href="{{url('/')}}"><p>Login Page</p></a>
                          <a href="forgot-password.html"><p>Forgot Password?</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/vendor')}}/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('public/vendor')}}/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('public/vendor')}}/metisMenu/metisMenu.min.js"></script>
    <script src="{{asset('public/dist')}}/js/sb-admin-2.js"></script>
    <script type="text/javascript">
             $(document).ready(function () {
        $('.alert').delay(4000).fadeOut(2000,function () {
           $(this).alert('close');
        });
    });
    </script>
</body>

</html>
