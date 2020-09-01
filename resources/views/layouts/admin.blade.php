<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: {{ trans('panel.site_title') }}</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.min.css')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simple-line-icons.css')}}">
    <script src="{{asset('code/highcharts.js')}}"></script>
    <script src="{{asset('code/modules/exporting.js')}}"></script>
    <script src="{{asset('code/modules/export-data.js')}}"></script>
    <script src="{{asset('performance-highcharts-utils.js')}}"></script>
  

    <style>
    .alert-warning {
    background-color: #fcf8e3;
    border-color: #faf2cc;
    color: #424242 !important;
}
.alert {
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
}
  
        .sidebar.h_menu {
                background: #191f28;
                height: 50px;
                width: 100%;
                position: fixed;
                top: 64px;
                left: auto;
            }
            .l-blue {
                background: linear-gradient(45deg, rgb(73, 79, 163), rgb(73, 79, 163)) !important;
                color: #fff !important;
            }
            .l-blush {
                    background: linear-gradient(45deg, #dd5e89, #f7bb97) !important;
                    color: #fff !important;
                }
                .l-green {
                    background: linear-gradient(75deg, #04654b, #cdfa7e) !important;
                }
           
            .theme-purple .btn-primary {
                background: rgb(73, 79, 163);
            }
            
        body {
-moz-transition: all 0.5s;
-o-transition: all 0.5s;
-webkit-transition: all 0.5s;
transition: all 0.5s;
background-color: #f0f5fa;
font-family: 'Poppins', Arial, Tahoma, sans-serif;
font-weight: 300;
font-size: 15px;
}

.with-corner-image-1 {
background-position: right;
background-image: url(images/corner-1.png);
}

.top_navbar {
border: none;
position: fixed;
top: 0;
right: 0;
z-index: 11;
width: 100%;
padding: 0;
background: #043e2a;
min-height: 53px;
box-shadow: none;
border-bottom: 1px solid #191b2a;
}
.sidebar.h_menu {
background: #043e2a;
height: 50px;
width: 100%;
position: fixed;
top: 64px;
left: auto;
}

section.content::before {
background: #043e2a;
top: -120px;
left: 0;
content: '';
height: 180px;
width: 100%;
position: absolute;
}
loader-wrapper, .theme-purple .active-bg {
background: #043e2a;
}
.theme-purple .sidebar.h_menu .menu li.active.open>a {
color: #fff;
}
.sidebar.h_menu .menu li>a {
font-size: 16px;
color: #fff;
}
.page-loader-wrapper {
    background: #49c5b6  !important ;
    color: #fff;
}
    </style>
</head>

<body class="theme-purple">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin"
                    src="https://thememakker.com/templates/infinio/html/assets/images/logo.svg" width="48" height="48"
                    alt="InfiniO"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Top Bar -->
    <nav class="top_navbar">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="navbar-logo">
                        <a href="javascript:void(0);" class="bars"></a>
                        <a class="navbar-brand" href="index.html"><img
                                src="{{asset('images/logo1.png')}}" width="30"
                                alt="InfiniO"><span class="m-l-10">APIN CENTRAL EMR</span></a>
                    </div>
                    <ul class="nav navbar-nav">
                      
                        <li class="dropdown app_menu hidden-sm"><a href="javascript:void(0);" class="dropdown-toggle"
                                data-toggle="dropdown" role="button">Hello <?php echo ucfirst(Auth::user()->name) ?> </a>
                           
                        </li>

                        <li class="dropdown profile">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <img class="rounded-circle" src="{{asset('assets/images/profile_av.jpg')}}" alt="User">
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="user-info">
                                        <h6 class="user-name m-b-0"><?php echo ucfirst(Auth::user()->name) ?> </h6>
                                        <p class="user-position">Active</p>
                                        <hr>
                                    </div>
                                </li>
                                <li>
                                <a href="{{route('customlogout')}}"  ><i class="icon-power m-r-10"></i><span>{{ trans('global.logout') }}</span></a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <aside id="leftsidebar" class="sidebar h_menu">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="menu">
                        <ul class="list">
                            <li class="header">MAIN</li>
                            <li class="active open"> <a href="{{route('admin.home')}}"><i
                                        class="icon-speedometer"></i><span>Dashboard</span></a></li>
                            <li><a href="javascript:void(0);" class="menu-toggle"><i
                                        class="icon-grid"></i><span>Treatment Indicators</span></a>
                                <ul class="ml-menu">
                                    <li><a href="{{route('admin.treatmentindicators')}}" style="color: #000;">Treatment Current</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle"><i
                                        class="icon-basket-loaded"></i><span>Upload Tracker</span></a>
                                <ul class="ml-menu">
                                    <li><a href="{{route('admin.previousuploads')}}" style="color: #000;">Upload Data</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    @yield('content')
    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
    @yield('scripts')
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</body>

</html>