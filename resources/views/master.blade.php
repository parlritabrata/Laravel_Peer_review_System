<!DOCTYPE html>
<html lang="en">

<head>
    <title>Peer Review Application</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" /> --}}
      <!-- Favicon icon -->
      {{-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> --}}
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset("assets/pages/waves/css/waves.min.css") }}" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/bootstrap/css/bootstrap.min.css") }}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset("assets/pages/waves/css/waves.min.css") }}" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset("assets/icon/themify-icons/themify-icons.css") }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset("assets/icon/font-awesome/css/font-awesome.min.css") }}">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/jquery.mCustomScrollbar.css") }}">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}">

      <link rel="stylesheet" href="{{ asset("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
      <link rel="stylesheet" href="{{ asset("assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
      <link rel="stylesheet" href="{{ asset("assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">


      
      
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="javascript:void(0)">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="#">
                          <b>P</b>eer <b>R</b>eview <b>A</b>pplication
                        </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          {{-- <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li> --}}
                          {{-- <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li> --}}
                      </ul>
                      <ul class="nav-right">
                          {{-- <li class="header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <i class="ti-bell"></i>
                                  <span class="badge bg-c-red"></span>
                              </a>
                              <ul class="show-notification">
                                  <li>
                                      <h6>Notifications</h6>
                                      <label class="label label-danger">New</label>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">John Doe</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Joseph William</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <div class="media">
                                          <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                          <div class="media-body">
                                              <h5 class="notification-user">Sara Soudein</h5>
                                              <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                              <span class="notification-time">30 minutes ago</span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </li> --}}

                          {{-- {{ $permission = DB::table('roles')->where('comp_id', Auth::user()->comp_id)->get }} --}}
                          <li class="user-profile header-notification">
                              <a href="javascript:void(0)" class="waves-effect waves-light">
                                @if(is_null(Auth::user()->user_img))
                                  <img src="{{ asset("assets/images/default_logo.png") }}" class="img-radius" alt="User-Profile-Image">
                                @else
                                    <img src="/User_Image/{{ Auth::user()->user_img }}" class="img-80 img-radius" height="40px" width="20px">
                                @endif
                                  <span>{{ Auth::user()->name }} ({{ Auth::user()->user_type }})</span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  
                                  <li class="waves-effect waves-light">
                                      <a href="#" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                          <i class="fa fa-power-off"></i> Logout
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href=""><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="{{ asset("assets/images/default_logo.png") }}" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">{{ Auth::user()->name }} ({{ Auth::user()->user_type }})</span>
                                  </div>
                              </div>
        
                              {{-- <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                          <a href="#!"><i class="ti-settings"></i>Settings</a>
                                          <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div> --}}
                          </div>
                          {{-- <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control" required="">
                                      <span class="form-bar"></span>
                                      <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div> --}}
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Basic</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="/dashboard" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="pcoded-hasmenu">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa fa-user" style="font-size: 18px"></i></span>
                                      <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Profile</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                      <li class=" ">
                                          <a href="/my_profile/{{ Auth::user()->id  }}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">My Profile</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>                                    
                
                                  </ul>
                              </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Course List</div>
                          <ul class="pcoded-item pcoded-left-item">

                            @if(Auth::user()->user_type == 'Admin')
                            <li>
                                <a href="{{ route('courses.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-file-text" style="font-size: 18px"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Courses</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>  
                            @endif

                            @if(Auth::user()->user_type == 'teacher')
                            <li>
                                <a href="{{ route('courses.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-file-text" style="font-size: 18px"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Courses</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>  

                            <li>
                                <a href="/course_allocation" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-file-text" style="font-size: 18px"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Course Allocation</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            @endif

                            @if(Auth::user()->user_type == 'student')

                            <li>
                                <a href="{{ route('courses.index') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-file-text" style="font-size: 18px"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Courses</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>  

                            <li>
                                <a href="/enrolled_course" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="fa fa-address-card-o" style="font-size: 18px"></i><b>FC</b></span>
                                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">My Courses</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>



                            @endif

       
                          </ul>
                          @if(Auth::user()->user_type == 'teacher')
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Assessments</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="{{ route('peer_reviews.index') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa fa-tasks" style="font-size: 18px"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Assessments</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                            
                           
        
                          </ul>
                          @endif

                          @if(Auth::user()->user_type == 'student')
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Marks</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="/student_review_marks/{{ Auth::user()->id }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa fa-tasks" style="font-size: 18px"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Peer Review Marks</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                            
                           
        
                          </ul>
                          @endif
        
                      </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      {{-- <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Dashboard</h5>
                                          <p class="m-b-0">Welcome to Mega Able</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-home"></i> </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div> --}}
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            
                                                <!-- Content Header (Page header) -->
                                                @yield('content')
                                                <!-- /.content -->
                                              
                                            <!--  project and team member end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                
                            </div>
                        </div>

                   

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset("assets/js/jquery/jquery.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/jquery-ui/jquery-ui.min.js") }} "></script>
    <script type="text/javascript" src="{{ asset("assets/js/popper.js/popper.min.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/bootstrap/js/bootstrap.min.js") }} "></script>
    <script type="text/javascript" src="{{ asset("assets/pages/widget/excanvas.js") }} "></script>
    <!-- waves js -->
    <script src="{{ asset("assets/pages/waves/js/waves.min.js") }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset("assets/js/jquery-slimscroll/jquery.slimscroll.js") }} "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset("assets/js/modernizr/modernizr.js") }} "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="{{ asset("assets/js/SmoothScroll.js") }}"></script>
    <script src="{{ asset("assets/js/jquery.mCustomScrollbar.concat.min.js") }} "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset("assets/js/chart.js/Chart.js") }}"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="{{ asset("assets/pages/widget/amchart/gauge.js") }}"></script>
    <script src="{{ asset("assets/pages/widget/amchart/serial.js") }}"></script>
    <script src="{{ asset("assets/pages/widget/amchart/light.js") }}"></script>
    <script src="{{ asset("assets/pages/widget/amchart/pie.min.js") }}"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="{{ asset("assets/js/pcoded.min.js") }}"></script>
    <script src="{{ asset("assets/js/vertical-layout.min.js") }} "></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset("assets/pages/dashboard/custom-dashboard.js") }}"></script>
    <script type="text/javascript" src="{{ asset("assets/js/script.js") }} "></script>

    <script src="{{ asset("assets/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ asset("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{ asset("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}"></script>
<script src="{{ asset("assets/plugins/datatables-buttons/js/dataTables.buttons.min.js") }}"></script>
<script src="{{ asset("assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}"></script>


<script src="{{ asset("assets/plugins/datatables-buttons/js/buttons.html5.min.js") }}"></script>
<script src="{{ asset("assets/plugins/datatables-buttons/js/buttons.print.min.js") }}"></script>
<script src="{{ asset("assets/plugins/datatables-buttons/js/buttons.colVis.min.js") }}"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>



</body>

</html>
