<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Umuganda Iwacu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="#"><h3 style="color:#fff;">Umuganda Iwacu</h3></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                <ul class="collapse">
                                    <li><a href="#"> <i class="fa fa-home"></i>Home</a></li>
                                    
                                  
                            </li>
                        
                                <li>
                                <a href="javascript:void(0)" aria-expanded="true">Citizen<a>
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route('citizens.create') }}"><i class="fa fa-user"></i>Create Citizen</a></li>
                                    <li><a href="#"><i class=""></i>Update</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>System User
                                    </span></a>
                                <ul class="collapse">
                                
                                    <li><a href="register1"><i class="fa fa-user"></i>Create User</a></li>
                                    <li><a href="#"><i class=""></i>Update</a></li>
                                    <li><a href="#">Delete</a></li>
                                    <li><a href="select">Report</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Report
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="#">View</a></li>
                                    <li><a href="#">Home</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>User</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Add User</a></li>
                                    <li><a href="#">Viw</a></li>
                                    <li><a href="piechart.html">Report</a></li>
                                </ul>
                            </li>
                    
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
        
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                            

                            </li>
                        
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Claudine <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    <table class="table table-bordered table-responsive-lg" cellspacing="0" cellpadding="0" width="80%" style=" font-size:medium;margin-top:5%;">
        <tr  class="btn-warning">
            <th>No</th>
            <th>ID Number</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Village</th>
            <th>Cell</th>
            <th>Sector</th>
            <th>District</th>
            <th width="300px"> Date Created</th>
            <th width="300px">Action</th>
            
        </tr>
        @foreach ($citizens as $citizen)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $citizen->idno}}</td>
                <td>{{ $citizen->fname }}</td>
                <td>{{ $citizen->lname }}</td>
                <td>{{ $citizen->gender }}</td>
                <td>{{ $citizen->status}}</td>
                <td>{{ $citizen->village}}</td>
                <td>{{ $citizen->cell}}</td>
                <td>{{ $citizen->sector}}</td>
                <td>{{ $citizen->district}}</td>
                <td>{{ date_format($citizen->created_at, 'jS M Y') }}</td>
                <td>
                <form action="{{ route('citizens.destroy',$citizen->id) }}" method="POST">

   

<a  href="{{ route('citizens.show',$citizen->id) }}"> <i class="fa fa-eye fa-lg"></i></a>



<a  href="{{ route('citizens.edit',$citizen->id) }}"><i class="fa fa-edit fa-lg"></i></a>



@csrf

@method('DELETE')



<button type="submit" ><i class="fa fa-remove text-danger"></i></button>

</form>

</td>

</tr>

@endforeach

</table>



{!! $citizens->links() !!}


            <!-- page title area end -->
            <div class="main-content-inner" >
                <div class="container" style="position:absolute; width:2000px">
                
                    <!-- seo fact area start -->
                    
                   
                </div>
            </div>
        </div>

 <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021<a href="https://colorlib.com/wp/">Coco &jannine.</a></p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
    
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
 </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>





