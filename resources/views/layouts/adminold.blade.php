<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>:: {{ trans('panel.site_title') }}</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="../assets/plugins/morrisjs/morris.min.css" />

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
<link rel="stylesheet" href="../assets/css/simple-line-icons.css">
</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="https://thememakker.com/templates/infinio/html/assets/images/logo.svg" width="48" height="48" alt="InfiniO"></div>
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
                    <a class="navbar-brand" href="index.html"><img src="https://thememakker.com/templates/infinio/html/assets/images/logo.svg" width="30" alt="InfiniO"><span class="m-l-10">InfiniO</span></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="search_bar hidden-xs">
                        <div class="input-group">                
                            <input type="text" class="form-control" placeholder="Find your stuff...">
                        </div>
                    </li>
                    <li class="dropdown notifications">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-bell"></i><span class="label-count">5</span></a>
                        <ul class="dropdown-menu">
                            <li class="header">New Message</li>
                            <li class="body">
                                <ul class="menu list-unstyled">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Alexander <span class="time">13min ago</span></span>
                                                    <span class="message">Meeting with Shawn at Stark Tower by 8 o'clock.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar6.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Grayson <span class="time">22min ago</span></span>
                                                    <span class="message">You have 5 unread emails in your inbox.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Sophia <span class="time">31min ago</span></span>
                                                    <span class="message">OrderPlaced: You received a new oder from Tina.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>                
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Isabella <span class="time">35min ago</span></span>
                                                    <span class="message">Lara added a comment in Blazing Saddles.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar8.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Sophia <span class="time">48min ago</span></span>
                                                    <span class="message">OrderPlaced: You received a new oder from Tina.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown task hidden-sm"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-flag"></i>
                        <span class="label-count">5</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Project</li>
                            <li class="body">
                                <ul class="menu tasks list-unstyled">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Clockwork Orange <span class="float-right">29%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Blazing Saddles <span class="float-right">78%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Project Archimedes <span class="float-right">45%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Eisenhower X <span class="float-right">68%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Oreo Admin Templates <span class="float-right">21%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width: 21%;"></div>
                                            </div>
                                        </a>
                                    </li>                        
                                </ul>
                            </li>
                            <li class="footer"><a href="javascript:void(0);">View All</a></li>
                        </ul>
                    </li>
                    <li class="dropdown app_menu hidden-sm"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-grid"></i></a>
                        <ul class="dropdown-menu">
                            <li>
								<ul>
									<li><a href="mail-inbox.html"><i class="icon-envelope"></i><span>Mail</span></a></li>
									<li><a href="contact.html"><i class="icon-list"></i><span>Contacts</span></a></li>
									<li><a href="chat.html"><i class="icon-bubble"></i><span>Chat</span></a></li>
									<li><a href="teams-board.html"><i class="icon-users"></i><span>Teams</span></a></li>
									<li><a href="projects.html"><i class="icon-notebook"></i><span>Projects</span></a></li>
									<li><a href="events.html"><i class="icon-calendar"></i><span>Calendar</span></a></li>
								</ul>
							</li>
                        </ul>
                    </li>
                    <li><a href="chat.html" ><i class="icon-speech"></i></a></li>
                    
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img class="rounded-circle" src="../assets/images/profile_av.jpg" alt="User">
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="user-info">
                                    <h6 class="user-name m-b-0">Alizee Thomas</h6>
                                    <p class="user-position">Available</p>
                                    <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                    <a title="linkedin" href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a>
                                    <a title="dribbble" href="javascript:void(0);"><i class="zmdi zmdi-dribbble"></i></a>
                                    <a title="google plus" href="javascript:void(0);"><i class="zmdi zmdi-google-plus-box"></i></a>
                                    <hr>
                                </div>
                            </li>                            
                            <li><a href="profile.html"><i class="icon-user m-r-10"></i> <span>My Profile</span> <span class="badge badge-success float-right">80%</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-notebook m-r-10"></i><span>Taskboard</span> <span class="badge badge-info float-right">New</span></a></li>                            
                            <li><a href="locked.html"><i class="icon-lock m-r-10"></i><span>Locked</span></a></li>
                            <li><a href="sign-in.html"><i class="icon-power m-r-10"></i><span>Sign Out</span></a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="js-right-sidebar"><i class="icon-equalizer"></i></a></li>
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
                        <li class="active open"> <a href="index.html"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="icon-grid"></i><span>App</span></a>
                            <ul class="ml-menu">
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="file-dashboard.html">File Manager</a></li>
                                <li><a href="contact.html">Contact list</a></li>
                                <li><a href="blog-dashboard.html">Blog</a></li>
                                <li><a href="app-ticket.html">Support Ticket</a></li>
                                <li><a href="taskboard.html">Taskboard</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-basket-loaded"></i><span>Ecommerce</span></a>
                            <ul class="ml-menu">
                                <li><a href="ec-dashboard.html">Dashboard</a></li>
                                <li><a href="ec-product.html">Products</a></li>
                                <li><a href="ec-product-detail.html">Product Detail</a></li>
                                <li><a href="ec-product-List.html">Product List</a></li>
                                <li><a href="ec-product-order.html">Orders</a></li>
                                <li><a href="ec-product-cart.html">Cart</a></li>
                                <li><a href="ec-checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-layers"></i><span>UI Elements</span></a>
                            <ul class="ml-menu">
                                <li><a href="ui-kit.html">UI KIT</a></li>                    
                                <li><a href="ui-alerts.html">Alerts</a></li>                    
                                <li><a href="ui-collapse.html">Collapse</a></li>
                                <li><a href="ui-colors.html">Colors</a></li>
                                <li><a href="ui-dialogs.html">Dialogs</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>                    
                                <li><a href="ui-listgroup.html">List Group</a></li>
                                <li><a href="ui-mediaobject.html">Media Object</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-notifications.html">Notifications</a></li>                    
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-rangesliders.html">Range Sliders</a></li>
                                <li><a href="ui-sortablenestable.html">Sortable & Nestable</a></li>
                                <li><a href="ui-tabs.html">Tabs</a></li>
                                <li><a href="ui-waves.html">Waves</a></li>
                            </ul>
                        </li>
                        <li class="header">FORMS, CHARTS, TABLES</li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="icon-doc"></i><span>Forms</span></a>
                            <ul class="ml-menu">
                                <li><a href="form-basic.html">Basic Elements</a></li>
                                <li><a href="form-advanced.html">Advanced Elements</a></li>
                                <li><a href="form-examples.html">Form Examples</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-editors.html">Editors</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-img-cropper.html">Image Cropper</a></li>
                                <li><a href="form-summernote.html">Summernote</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="icon-tag"></i><span>Tables</span></a>
                            <ul class="ml-menu">                        
                                <li><a href="table-normal.html">Normal Tables</a></li>
                                <li><a href="table-jquerydatatable.html">Jquery Datatables</a></li>
                                <li><a href="table-editable.html">Editable Tables</a></li>                                
                                <li><a href="table-color.html">Tables Color</a></li>
                                <li><a href="table-filter.html">Tables Filter</a></li>
                            </ul>
                        </li>            
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="icon-bar-chart"></i><span>Charts</span></a>
                            <ul class="ml-menu">
                                <li><a href="echart.html">eCharts</a></li>
                                <li><a href="morris.html">Morris</a></li>
                                <li><a href="flot.html">Flot</a></li>
                                <li><a href="chartjs.html">ChartJS</a></li>
                                <li><a href="sparkline.html">Sparkline</a></li>
                                <li><a href="jquery-knob.html">Jquery Knob</a></li>
                            </ul>
                        </li>
                        <li class="header">EXTRA COMPONENTS</li>                    
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="icon-puzzle"></i><span>Widgets</span></a>
                            <ul class="ml-menu">
                                <li><a href="widgets-app.html">Apps Widgetse</a></li>
                                <li><a href="widgets-data.html">Data Widgetse</a></li>
                                <li><a href="widgets-chart.html">Chart Widgetse</a></li>
                            </ul>
                        </li>
                        <li> <a href="javascript:void(0);" class="menu-toggle"><i class="icon-lock"></i><span>Auth</span></a>
                            <ul class="ml-menu">
                                <li><a href="sign-in.html">Sign In</a></li>
                                <li><a href="sign-up.html">Sign Up</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="404.html">Page 404</a></li>
                                <li><a href="403.html">Page 403</a></li>
                                <li><a href="500.html">Page 500</a></li>
                                <li><a href="503.html">Page 503</a></li>
                                <li><a href="page-offline.html">Page Offline</a></li>
                                <li><a href="locked.html">Locked Screen</a></li>
                            </ul>
                        </li>
                        <li> <a href="javascript:void(0);" class="menu-toggle"><i class="icon-folder-alt"></i><span>Pages</span></a>
                            <ul class="ml-menu">
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="teams-board.html">Teams Board</a></li>
                                <li><a href="projects.html">Projects List</a></li>
                                <li><a href="image-gallery.html">Image Gallery</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="helper-class.html">Helper Classes</a></li>
                            </ul>
                        </li>
                        <li> <a href="javascript:void(0);" class="menu-toggle"><i class="icon-map"></i><span>Maps</span></a>
                            <ul class="ml-menu">
                                <li><a href="map-google.html">Google Map</a></li>
                                <li><a href="map-yandex.html">YandexMap</a></li>
                                <li><a href="map-jvectormap.html">jVectorMap</a></li>
                            </ul>
                        </li>                
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <div class="slim_scroll">
        <div class="card">
            <h6>Skins</h6>
            <ul class="choose-skin list-unstyled">
                <li data-theme="purple" class="active">
                    <div class="purple"></div>
                </li>                   
                <li data-theme="blue">
                    <div class="blue"></div>
                </li>
                <li data-theme="cyan">
                    <div class="cyan"></div>
                </li>
                <li data-theme="green">
                    <div class="green"></div>
                </li>
                <li data-theme="orange">
                    <div class="orange"></div>
                </li>
                <li data-theme="blush">
                    <div class="blush"></div>
                </li>
            </ul>
        </div>
        <div class="card theme-light-dark">
            <h6>Theme Option</h6>
            <button class="btn btn-default btn-block btn-round btn-simple t-light">Light</button>
            <button class="btn btn-default btn-block btn-round t-dark">Dark</button>
        </div> 
        <div class="card">
            <h6>General Settings</h6>
            <ul class="setting-list list-unstyled">
                <li>
                    <div class="checkbox">
                        <input id="checkbox1" type="checkbox">
                        <label for="checkbox1">Report Panel Usage</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox2" type="checkbox" checked="">
                        <label for="checkbox2">Email Redirect</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox3" type="checkbox" checked="">
                        <label for="checkbox3">Notifications</label>
                    </div>                        
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox4" type="checkbox" checked="">
                        <label for="checkbox4">Auto Updates</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox5" type="checkbox" checked="">
                        <label for="checkbox5">Offline</label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <input id="checkbox6" type="checkbox" checked="">
                        <label for="checkbox6">Location Permission</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>

<!-- Main Content -->
<section class="content">
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                <h2>Welcome to InfiniO</h2>
                                <ul class="breadcrumb p-l-0 p-b-0 ">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ul>
                            </div>            
                            <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#706bd1">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                                    <small>Page Views</small>
                                </div>
                                <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#2196f3">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                                    <small>Visitors</small>
                                </div>
                                <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-pie">30, 35, 25, 8</div>
                        </div>
                        <div class="content">
                            <div class="text">USAGE</div>
                            <div class="number"><span class="number count-to" data-from="0" data-to="98" data-speed="2000" data-fresh-interval="700">98</span>%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                        </div>
                        <div class="content">
                            <div class="text">IMPRESSIONS</div>
                            <div class="number count-to" data-from="0" data-to="457512" data-speed="2000" data-fresh-interval="700">457512</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL SALES</div>                            
                            <div class="number">$<span class="number count-to" data-from="0" data-to="125543" data-speed="2000" data-fresh-interval="700">125543</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card info-box-2">
                    <div class="body">
                        <div class="icon">
                            <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                        </div>
                        <div class="content">
                            <div class="text">CURRENCY</div>
                            <div class="number">$<span class="number count-to" data-from="0" data-to="1063" data-speed="2000" data-fresh-interval="700">1063</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Sales</strong> Report</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="m_area_chart" class="m-b-20" style="height: 217px;"></div>                        
                        <div class="row text-center">
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">$113 <i class="zmdi zmdi-caret-up col-green"></i></h4>
                                <p class="text-muted m-b-0"> Today's Sales</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">$814 <i class="zmdi zmdi-caret-down col-red"></i></h4>
                                <p class="text-muted m-b-0">This Week's Sales</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">$3251 <i class="zmdi zmdi-caret-up col-green"></i></h4>
                                <p class="text-muted m-b-0">This Month's Sales</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <h4 class="margin-0">$51,254 <i class="zmdi zmdi-caret-up col-green"></i></h4>
                                <p class="text-muted m-b-0">This Year's Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card overflowhidden bitcoin">
                    <div class="body">
                        <small>BTC</small>
                        <h2>0.0115</h2>
                        <h6>Bitcoin Earnings</h6>
                        <p>It is a long established fact that<br> a reader will be distracted <br> by the readable</p>
                        <button class="btn btn-primary btn-simple btn-round">View Statements </button>
                    </div>
                    <div id="sparkline16" class="text-center"></div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Data</strong> Managed</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="m-b-0">2,921</h2>
                                <p>External Records</p>                                
                            </div>
                            <div class="col-md-6">
                                <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="60px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#00ced1">2,5,6,4,8,7,5,6,2,3,5,6,2,3,4,2</div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <tbody>
                                    <tr>
                                        <th><i class="zmdi zmdi-circle text-success"></i></th>
                                        <td>Twitter</td>
                                        <td><span>862 Records</span></td>
                                        <td>35% <i class="zmdi zmdi-caret-up"></i></td>
                                    </tr>
                                    <tr>
                                        <th><i class="zmdi zmdi-circle text-info"></i></th>
                                        <td>Facebook</td>
                                        <td><span>451 Records</span></td>
                                        <td>15% <i class="zmdi zmdi-caret-up"></i></td>
                                    </tr>
                                    <tr>
                                        <th><i class="zmdi zmdi-circle text-warning"></i></th>
                                        <td>Mailchimp</td>
                                        <td><span>502 Records</span></td>
                                        <td>20% <i class="zmdi zmdi-caret-down"></i></td>
                                    </tr>
                                    <tr>
                                        <th><i class="zmdi zmdi-circle text-danger"></i></th>
                                        <td>Google</td>
                                        <td><span>502 Records</span></td>
                                        <td>20% <i class="zmdi zmdi-caret-up"></i></td>
                                    </tr>
                                    <tr>
                                        <th><i class="zmdi zmdi-circle"></i></th>
                                        <td>Other</td>
                                        <td><span>237 Records</span></td>
                                        <td>10% <i class="zmdi zmdi-caret-down"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Visitors</strong> Statistics</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 visitors-chart">
                                <div id="donut_chart" class="donut_chart"></div>
                                <span><i class="zmdi zmdi-desktop-mac"></i>Desktops</span>
                                <span><i class="zmdi zmdi-tablet-mac"></i>Tablet</span>
                                <span><i class="zmdi zmdi-smartphone"></i>Mobile</span>
                            </div>
                            <div class="col-lg-6 col-md-12 text-center">
                                <div id="world-map-markers" style="height: 260px;"></div>
                                <div class="row">
                                    <div class="col-6">
                                        <small>Page Views</small>
                                        <h5 class="m-b-0">32,211,536</h5>
                                    </div>
                                    <div class="col-6">
                                        <small>Site Visitors</small>
                                        <h5 class="m-b-0">23,516</h5>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>                    
                </div>                
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Marketing</strong> Campaign <small>This Month </small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class="zmdi zmdi-facebook zmdi-hc-2x"></i>
                                        </td>
                                        <td>
                                            <p class="margin-0">Facebook Ads</p>
                                            <span>1.2k Likes, 418 Shares</span>
                                        </td>
                                        <td>
                                            <h6 class="m-b-0">$ 402</h6>
                                            <span class="text-muted">Spent</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="text-success">
                                                <i class="zmdi zmdi-trending-up"></i>23
                                            </div>
                                            <div class="text-muted">up</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="zmdi zmdi-twitter zmdi-hc-2x"></i>
                                        </td>
                                        <td>
                                            <p class="margin-0">Twitter Ads</p>
                                            <span>1k Likes, 128 Shares</span>
                                        </td>
                                        <td>
                                            <h6 class="m-b-0">$ 489</h6>
                                            <span class="text-muted">Spent</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="text-danger">
                                                <i class="zmdi zmdi-trending-down"></i>
                                                -9
                                            </div>
                                            <div class="text-muted">down</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="zmdi zmdi-instagram zmdi-hc-2x"></i>
                                        </td>
                                        <td>
                                            <p class="margin-0">Instagram Post</p>
                                            <span>1k Follows, 228 Likes</span>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">$ 718 </h6>
                                            <span class="text-muted">Spent</span>
                                        </td>
                                        <td class="text-right">
                                            <div class=" text-success">
                                                <i class="zmdi zmdi-trending-up"></i>
                                                16
                                            </div>
                                            <div class="text-muted">up</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="zmdi zmdi-linkedin zmdi-hc-2x"></i>
                                        </td>
                                        <td>
                                            <p class="margin-0">LinkedIn Post</p>
                                            <span>1k Follows, 228 Likes</span>
                                        </td>
                                        <td>
                                            <h6 class="mb-0">$ 768</h6>
                                            <span class="text-muted">Spent</span>
                                        </td>
                                        <td class="text-right">
                                            <div class=" text-success">
                                                <i class="zmdi zmdi-trending-up"></i>
                                                27
                                            </div>
                                            <div class="text-muted">up</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>New</strong> Connections <small>This Month</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="follow_us list-unstyled m-b-0">                            
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Joge Lucky</span>
                                            <span class="message">Java Developer</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Isabella</span>
                                            <span class="message">CEO, Thememakker</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Folisise Chosielie</span>
                                            <span class="message">Art director, Movie Cut</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander</span>
                                            <span class="message">Writter, Mag Editor</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </a>                            
                            </li>                        
                        </ul>
                    </div>                    
                </div>                
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>To do</strong> list</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="body to-do-list">
                        <ul>            
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox31" type="checkbox">
                                    <label for="checkbox31">Remember my Preference</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox32" type="checkbox" checked="">
                                    <label for="checkbox32">New logo design for InfiniO project</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox33" type="checkbox" checked="">
                                    <label for="checkbox33">Design PSD files for InfiniO</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox34" type="checkbox">
                                    <label for="checkbox34">Deploy existing code to example.com</label>
                                </div>
                            </li>
                        </ul>
                        <div class="form-group m-t-10 m-b-0">
                            <input type="text" value="" placeholder="Add New" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="card overflowhidden active-bg daily-sale">
                    <div class="body">
                        <h5 class="m-b-0">Daily Sales</h5>
                        <p>Check out each collumn for more details</p>
                    </div>
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="117px" data-bar-Width="8" data-bar-Spacing="15"
                        data-bar-Color="#ffffff">7,5,6,4,8,7,5,6,2,3,5,11,2,3,4,1,4,7,2,3,6,4,5,5,6,2,3,5,6,2,3,4,2,4</div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="margin-0">Member Profit</h6>
                                            <span>Awerage Weekly Profit</span>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="margin-0 text-success">+$13,250</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="margin-0">Orders</h6>
                                            <span>Weekly Customer Orders</span>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="margin-0 text-info">+$14,100</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="margin-0">Issue Reports</h6>
                                            <span>System bugs and issues</span>
                                        </td>
                                        <td class="text-right">
                                            <h4 class="margin-0 text-danger">+$1,105</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="card overflowhidden weather2">
                    <div class="body city-selected l-khaki">
                        <div class="row">
                            <div class="col-12">
                                <div class="city"><span>City:</span> New York</div>
                                <div class="night">Day - 12:07 PM</div>
                            </div>
                            <div class="info col-7">
                                <div class="temp"><h2>34°</h2></div>									
                            </div>
                            <div class="icon col-5">
                                <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/summer.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                            <td>Wind</td>
                            <td class="font-medium">ESE 17 mph</td>
                        </tr>
                        <tr>
                            <td>Humidity</td>
                            <td class="font-medium">72%</td>
                        </tr>
                        <tr>
                            <td>Pressure</td>
                            <td class="font-medium">25.56 in</td>
                        </tr>
                        <tr>
                            <td>Cloud Cover</td>
                            <td class="font-medium">80%</td>
                        </tr>
                        <tr>
                            <td>Ceiling</td>
                            <td class="font-medium">25280 ft</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item text-center active">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Monday</p>
                                            <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/rain.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Tuesday</p>
                                            <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Wednesday</p>
                                            <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/wind.svg" alt="">
                                        </li>
                                    </ul>
                                </div>                                
                            </div>
                            <div class="carousel-item text-center">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Thursday</p>
                                            <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/sky.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Friday</p>
                                            <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Saturday</p>
                                            <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/summer.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>							
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="card user-account">
                    <div class="header">
                        <h2><strong>User</strong> Accounts</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Profile</th>
                                        <th>User ID</th>
                                        <th class="hidden-xs">Email Address</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 25px;">1</td>
                                        <td style="width: 60px;"><img src="../assets/images/xs/avatar1.jpg" alt="" class="rounded"></td>
                                        <td>jacob</td>
                                        <td class="hidden-xs">jacob@gnail.com</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="../assets/images/xs/avatar2.jpg" alt="" class="rounded"></td>
                                        <td>charlotte</td>
                                        <td class="hidden-xs">a.charlotte@gnail.com</td>
                                        <td><span class="badge badge-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="../assets/images/xs/avatar3.jpg" alt="" class="rounded"></td>
                                        <td>grayson</td>
                                        <td class="hidden-xs">grayson@yahoo.com</td>
                                        <td><span class="badge badge-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="../assets/images/xs/avatar4.jpg" alt="" class="rounded"></td>
                                        <td>jacob</td>
                                        <td class="hidden-xs">jacob@gnail.com</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="../assets/images/xs/avatar5.jpg" alt="" class="rounded"></td>
                                        <td>amelia</td>
                                        <td class="hidden-xs">amelia@gnail.com</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><img src="../assets/images/xs/avatar6.jpg" alt="" class="rounded"></td>
                                        <td>michael</td>
                                        <td class="hidden-xs">michael@gmail.com</td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><img src="../assets/images/xs/avatar8.jpg" alt="" class="rounded"></td>
                                        <td>jacob</td>
                                        <td class="hidden-xs">jacob@gnail.com</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-xl-4">
                <div class="card">
                    <div class="header">
                        <h2><strong>Customer</strong> Overview</h2>                        
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <p class="m-b-25">
                            <span class="m-r-30"><i class="zmdi zmdi-circle text-info m-r-5"></i>Availability</span>
                            <span><i class="zmdi zmdi-circle text-success m-r-5"></i>Return Visitors</span>
                        </p>
                        <div id="m_area_chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="header">
                        <h2><strong>Resent</strong> Chat<small>Design Team</small></h2>                       
                    </div>
                    <div class="body">
                        <div class="cwidget-scroll">
                            <ul class="chat-widget m-r-5 clearfix">
                                <li class="left float-left">
                                    <img src="../assets/images/xs/avatar6.jpg" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <span class="message">Hello Messi, myself playing together what is ur thought!</span>
                                    </div>
                                </li>
                                <li class="right">
                                    <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <span class="message">Ya but not sure</span>
                                    </div>
                                </li>
                                <li class="left float-left">
                                    <img src="../assets/images/xs/avatar6.jpg" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <span class="message">Could able to play together!</span>
                                    </div>
                                </li>
                                <li class="right">
                                    <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                                    <div class="chat-info">
                                        <span class="message">Yes, its alright</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="input-group p-t-15">
                            <input type="text" class="form-control" placeholder="Enter text here...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-mail-send"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="header">
                        <h2><strong>Sale</strong> Progress</h2>                       
                    </div>
                    <div class="body">
                        <span>Yearly Income</span>
                        <h3>$22,652<sup>.35</sup></h3>                        
                        <div class="m-b-20">
                            <h6>117</h6>                            
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:75%; " aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div><small>Example data</small><span class="float-right"><i class="zmdi zmdi-caret-up"></i> +24%</span></div>
                        </div>
                        <div class="m-b-20">
                            <h6>78</h6>                            
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:55%; " aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div><small>Example data</small><span class="float-right"><i class="zmdi zmdi-caret-down"></i> -12%</span></div>
                        </div>
                        <div class="m-b-20">
                            <h6>56</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" style="width:30%; " aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div><small>Example data</small><span class="float-right"><i class="zmdi zmdi-caret-up"></i> +24%</span></div>
                        </div>
                        <div class="m-b-20">
                            <h6>82</h6>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" style="width:62%; " aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div><small>Example data</small><span class="float-right"><i class="zmdi zmdi-caret-down"></i> -12%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card active-bg">
                    <div class="body">
                        <p class="copyright m-b-0 text-white">Copyright 2018 © All Rights Reserved. InfiniO Dashboard Template</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/widgets/infobox/infobox-1.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/infinio/html/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 15:19:16 GMT -->
</html>