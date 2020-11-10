<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">

    <!-- stack styles-->
    @stack('styles')
  </head>
  <body class="nav-md">
    
    {{-- sweet alert from realrashid --}}
    @include('sweetalert::alert')
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('home') }}" class="site_title text-center"> <span>Pro-davies acl</span></a>
            </div>
            <br><br>
          @include('master_layouts.sidebar')
          </div>
        </div>

              <!-- top navigation -->
      <div class="top_nav top_nav_fixed">
        <div class="nav_menu">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i> </a>
            </div>
            <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">
                  <span class="profile-ava">
                    <img alt="" src="{{ asset('images/avatar1_small.jpg')}}">
                </span> {{ Auth::User()->name}}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"  href="javascript:;"> Profile</a>
                    <a class="dropdown-item"  href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out pull-right"></i> Log Out
                                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none"> @csrf </form>
                </div>
              </li>
              
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          
          @yield('content')

        <!-- /page content -->
      </div>
    </div>
        <!-- jQuery -->
        <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        
        <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        
        <!-- NProgress -->
        <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
        
        <!-- DateJS -->
        <script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
        
        <!-- Custom Theme Scripts -->
        <script src="{{asset('build/js/custom.min.js')}}"></script>

        {{-- stack scripts --}}
    @stack('scripts')
  </body>
</html>
