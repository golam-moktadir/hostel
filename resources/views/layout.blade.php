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
    <script type="text/javascript">
         function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">Ehsan Software</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{url('logout_method')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> student<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{URL('/student')}}">dashboard</a>
                        </li>
                        <li>
                            <a href="{{URL('/add_student')}}">Add new</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('rent')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Hostel Fee</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Hostel Fee Schedule<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('fee_schedule')}}">dashboard</a>
                        </li>
                        <li>
                            <a href="{{url('add_fee_schedule')}}">Add new</a>
                        </li>
                    </ul>
                </li>
                <li>
                   <a href="{{url('paid_rent')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Hostel Fee  History</a>
                </li>
                <li>
                    <a href="{{url('meal')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Meal Entry & Fees</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Meal history<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('meal_fee_view')}}">Fee History</a>
                        </li>
                        <li>
                            <a href="{{url('meal_view')}}">Entry History</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Shopping<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('shopping_view')}}">dashboard</a>
                        </li>
                        <li>
                            <a href="{{url('shopping_entry')}}">Add new</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('meal_calculate')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Meal Estimate</a>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
 </nav>
 <div id="page-wrapper">
  @yield('content')       <!-- /#page-wrapper -->
 </div>
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
            <br>
          <small>Copyright © Your Website 2018</small><br><br>
        </div>
      </div>
    </footer>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('public/vendor')}}/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('public/vendor')}}/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('public/vendor')}}/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="{{asset('public/vendor')}}/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/vendor')}}/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('public/vendor')}}/datatables-responsive/dataTables.responsive.js"></script>
    <script src="{{asset('public/vendor')}}/bootstrap/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="{{asset('public/vendor')}}/bootstrap/js/datapicker/datepicker-active.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('public/dist')}}/js/sb-admin-2.js"></script>
    <script src="{{asset('public/js')}}/datapicker/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });      
     $(document).ready(function () {
        $('.alert').delay(4000).fadeOut(2000,function () {
           $(this).alert('close');
        });
    });
    </script>

</body>

</html>
