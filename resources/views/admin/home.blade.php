@extends('layouts.admin')
@section('content')


    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body block-header">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-12">
                                    <h2> <?php echo ucfirst(Auth::user()->state) ?> State  Dashoard</h2>
                                    <ul class="breadcrumb p-l-0 p-b-0 ">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-12 text-right" >
                                    
                                    <button
                                        class="alert-warning alert  float-right hidden-xs m-l-10"><strong>EMR data as at <?php echo   date('d-M-Y', strtotime($lastEMRDate['last_emr_date'])) ?></strong></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card info-box-2 with-corner-image-1">
                        <div class="body">
                            <div class="icon">
                                <div class="chart chart-pie">30, 35, 25, 8</div>
                            </div>
                            <div class="content">
                                <div class="text">Tx New _ Q2<strong>(Jan. 1 2020 to <?php echo   date('M. d Y', strtotime($lastEMRDate['last_emr_date'])) ?>)</strong></div>
                                <div class="number"><span class="number " ><?php echo number_format($txNew['tx_new']) ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="card info-box-2">
                        <div class="body">
                            <div class="icon">
                                <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                            </div>
                            <div class="content">
                                <div class="text">Active(Tx Current)</div>
                                <div class="number" ><?php echo number_format($stats[0]->active) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="card info-box-2">
                        <div class="body">
                            <div class="icon">
                                <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                            </div>
                            <div class="content">
                                <div class="text">Transferred Out</div>
                                <div class="number"><span class="number" ><?php echo number_format($stats[0]->transferred_out) ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="card info-box-2">
                        <div class="body">
                            <div class="icon col-md-12">
                                <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                            </div>
                            <div class="content">
                                <div class="text">Dead</div>
                                <div class="number"><span class="number" ><?php echo number_format($stats[0]->dead) ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <div class="card info-box-2  with-corner-image-1">
                        <div class="body">
                            <div class="icon">
                                <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                            </div>
                            <div class="content">
                                <div class="text">Inactive</div>
                                <div class="number"><span class="number" ><?php echo number_format($stats[0]->ltfu_data) ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="row clearfix">
            <?php if(Auth::user()->state == "all"){ ?>
                <div class="col-xl-8 col-lg-12 col-md-12">
                <div  id="tx_curr_ip_achievement_chart" style="display:none"></div>
                <div id="tx_curr_state_achievement_chart"></div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card overflowhidden bitcoin">
                        <div class="body">
                            <small> Active Patients</small>
                            <h2 class="number" ><?php echo number_format($stats[0]->active) ?></h2>
                            <h6>Last EMR Update &nbsp&nbsp<strong style="color: #a27ce6;"><?php echo   date('d-M-Y', strtotime($lastEMRDate['last_emr_date'])) ?></strong></h6>
                            
                            <a href="linelist/All_APIN.xlsx"><button class="btn btn-primary btn-simple btn-round">Download full line list </button></a>
                        </div>
                        <div id="sparkline16" class="text-center"></div>
                    </div>
                </div>
                <?php }?>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card user-account">
                        <div class="header">
                            <h2>Treatment <strong> Performance</strong> Per State</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
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
                                            <th>State</th>
                                            <th> Total facilities</th>
                                            <th>Total Patients</th>
                                            <th>Active</th>
                                            <th >Transferred Out</th>
                                            <th>Dead</th>
                                            <th>Inactive</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list as $key => $r)
                                        <tr>                                           
                                            <td>{{ ucfirst($r->state ?? '') }}</td>
                                            <td>{{$r->total_facilities ?? '' }}</td>
                                            
                                            <td >   {{ $r->total_patients ?? '' }}</td>
                                            <td >   {{ $r->active ?? '' }}</td>
                                            <td >   {{ $r->transferred_out ?? '' }}</td>
                                            <td >    {{ $r->dead ?? '' }}</td>
                                            <td >    {{ $r->ltfu_data ?? '' }}</td>
                                            <td><a href="linelis/All_APIN.xlsx" class="btn btn-success">Download Line List</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12" style="display:none">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Data</strong> Managed</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
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
                                    <div class="sparkline m-b-20" data-type="bar" data-width="97%" data-height="60px"
                                        data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#00ced1">
                                        2,5,6,4,8,7,5,6,2,3,5,6,2,3,4,2</div>
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
                <div class="col-xl-8 col-lg-12 col-md-12" style="display:none">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Visitors</strong> Statistics</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
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
           
            <div class="row clearfix" style="display:none">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Marketing</strong> Campaign <small>This Month </small></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
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
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
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
            <div class="row clearfix" style="display:none">
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="card overflowhidden active-bg daily-sale">
                        <div class="body">
                            <h5 class="m-b-0">Daily Sales</h5>
                            <p>Check out each collumn for more details</p>
                        </div>
                        <div class="sparkline" data-type="bar" data-width="97%" data-height="117px" data-bar-Width="8"
                            data-bar-Spacing="15" data-bar-Color="#ffffff">
                            7,5,6,4,8,7,5,6,2,3,5,11,2,3,4,1,4,7,2,3,6,4,5,5,6,2,3,5,6,2,3,4,2,4</div>
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
            <div class="row clearfix" style="display:none">
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="card overflowhidden weather2">
                        <div class="body city-selected l-khaki">
                            <div class="row">
                                <div class="col-12">
                                    <div class="city"><span>City:</span> New York</div>
                                    <div class="night">Day - 12:07 PM</div>
                                </div>
                                <div class="info col-7">
                                    <div class="temp">
                                        <h2>34°</h2>
                                    </div>
                                </div>
                                <div class="icon col-5">
                                    <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/summer.svg"
                                        alt="">
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
                                                <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/rain.svg"
                                                    alt="">
                                            </li>
                                            <li class="day col-4">
                                                <p>Tuesday</p>
                                                <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/cloudy.svg"
                                                    alt="">
                                            </li>
                                            <li class="day col-4">
                                                <p>Wednesday</p>
                                                <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/wind.svg"
                                                    alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="carousel-item text-center">
                                    <div class="col-12">
                                        <ul class="row days-list list-unstyled">
                                            <li class="day col-4">
                                                <p>Thursday</p>
                                                <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/sky.svg"
                                                    alt="">
                                            </li>
                                            <li class="day col-4">
                                                <p>Friday</p>
                                                <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/cloudy.svg"
                                                    alt="">
                                            </li>
                                            <li class="day col-4">
                                                <p>Saturday</p>
                                                <img src="https://thememakker.com/templates/infinio/html/assets/images/weather/summer.svg"
                                                    alt="">
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
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
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
                                            <td style="width: 60px;"><img src="../assets/images/xs/avatar1.jpg" alt=""
                                                    class="rounded"></td>
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
            <div class="row clearfix" style="display:none">
                <div class="col-lg-12 col-xl-4">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Customer</strong> Overview</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more"></i> </a>
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
                                            <span class="message">Hello Messi, myself playing together what is ur
                                                thought!</span>
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
                                    <div class="progress-bar progress-bar-success" role="progressbar"
                                        style="width:75%; " aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div><small>Example data</small><span class="float-right"><i
                                            class="zmdi zmdi-caret-up"></i> +24%</span></div>
                            </div>
                            <div class="m-b-20">
                                <h6>78</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar"
                                        style="width:55%; " aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div><small>Example data</small><span class="float-right"><i
                                            class="zmdi zmdi-caret-down"></i> -12%</span></div>
                            </div>
                            <div class="m-b-20">
                                <h6>56</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:30%; "
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div><small>Example data</small><span class="float-right"><i
                                            class="zmdi zmdi-caret-up"></i> +24%</span></div>
                            </div>
                            <div class="m-b-20">
                                <h6>82</h6>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                        style="width:62%; " aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div><small>Example data</small><span class="float-right"><i
                                            class="zmdi zmdi-caret-down"></i> -12%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix" >
                <div class="col-md-12 col-lg-12">
                    <div class="card active-bg">
                        <div class="body">
                            <p class="copyright m-b-0 text-white">Copyright {{date('Y')}} © All Rights Reserved. APIN Public Health Initiative
                               </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@parent
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/widgets/infobox/infobox-1.js')}}"></script>
<script src="{{asset('assets/js/pages/index.js')}}"></script>
<?php if(Auth::user()->state == "all"){ ?>
<script type="text/javascript">
var data = {
  "_data": {
    "ip_target_series": {
      "name": "Target",
      "data": [
        {
          "name": "APIN",
          "y": 285415
        }
      ]
    },
    "state_target_series": {
      "name": "Target",
      "data": [
        {
          "name": "Benue",
          "y": 163146
        },
        {
          "name": "Ekiti",
          "y": 3602
        },
        {
          "name": "Ogun",
          "y": 11739
        },
        {
          "name": "Ondo",
          "y": 11452
        },
        {
          "name": "Osun",
          "y": 5288
        },
        {
          "name": "Oyo",
          "y": 17555
        },
        {
          "name": "Plateau",
          "y": 42318
        }
      ]
    },
    "ip_achievement_series": {
      "name": "Achievement",
      "data": [
        {
          "name": "APIN",
          "y": 216187,
          "drilldown": "APIN"
        }
      ]
    },
    "ip_achievement_drill_down_series": [
      {
        "name": "Target",
        "id": "APIN-Target",
        "type": "area",
        "color": "steelblue",
        "data": [
          {
            "name": "2020 October – Q1",
            "y": 285415,
            "x": 1
          },
          {
            "name": "2019 January – Q2",
            "y": 285415,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 285415,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 285415,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "Achievement",
        "id": "APIN-Achievement",
        "type": "area",
        "color": "sandybrown",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 216187,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "% Achievement",
        "id": "APIN-Percentage",
        "type": "spline",
        "color": "green",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 75.74,
            "x": 4
          }
        ],
        "yAxis": 1,
        "lineWidth": 0,
        "marker": {
          "radius": 5,
          "symbol": "circle"
        },
        "states": {
          "hover": {
            "lineWidth": 0,
            "lineWidthPlus": 0,
            "marker": {
              "radius": 5
            }
          }
        }
      }
    ],
    "state_achievement_series": {
      "name": "Achievement",
      "data": [
        {
          "name": "Benue",
          "y": <?php echo $statePerState[0]->active  ?>,
          "drilldown": "7"
        },
        {
          "name": "Ekiti",
          "y": <?php echo $statePerState[1]->active  ?>,
          "drilldown": "13"
        },
        {
          "name": "Ogun",
          "y": <?php echo $statePerState[2]->active  ?>,
          "drilldown": "28"
        },
        {
          "name": "Ondo",
          "y": <?php echo $statePerState[3]->active  ?>,
          "drilldown": "29"
        },
        {
          "name": "Osun",
          "y": <?php echo $statePerState[4]->active  ?>,
          "drilldown": "30"
        },
        {
          "name": "Oyo",
          "y": <?php echo $statePerState[5]->active  ?>,
          "drilldown": "31"
        },
        {
          "name": "Plateau",
          "y": <?php echo $statePerState[6]->active  ?>,
          "drilldown": "32"
        }
      ]
    },
    "state_achievement_drill_down_series": [
      {
        "name": "Target",
        "id": "7-Target",
        "type": "area",
        "color": "steelblue",
        "data": [
          {
            "name": "2020 October – Q1",
            "y": 163146,
            "x": 1
          },
          {
            "name": "2019 January – Q2",
            "y": 163146,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 163146,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 163146,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "Achievement",
        "id": "7-Achievement",
        "type": "area",
        "color": "sandybrown",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 135743,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "% Achievement",
        "id": "7-Percentage",
        "type": "spline",
        "color": "green",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 83.2,
            "x": 4
          }
        ],
        "yAxis": 1,
        "lineWidth": 0,
        "marker": {
          "radius": 5,
          "symbol": "circle"
        },
        "states": {
          "hover": {
            "lineWidth": 0,
            "lineWidthPlus": 0,
            "marker": {
              "radius": 5
            }
          }
        }
      },
      {
        "name": "Target",
        "id": "30-Target",
        "type": "area",
        "color": "steelblue",
        "data": [
          {
            "name": "2020 October – Q1",
            "y": 5288,
            "x": 1
          },
          {
            "name": "2019 January – Q2",
            "y": 5288,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 5288,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 5288,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "Achievement",
        "id": "30-Achievement",
        "type": "area",
        "color": "sandybrown",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 5042,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "% Achievement",
        "id": "30-Percentage",
        "type": "spline",
        "color": "green",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 95.35,
            "x": 4
          }
        ],
        "yAxis": 1,
        "lineWidth": 0,
        "marker": {
          "radius": 5,
          "symbol": "circle"
        },
        "states": {
          "hover": {
            "lineWidth": 0,
            "lineWidthPlus": 0,
            "marker": {
              "radius": 5
            }
          }
        }
      },
      {
        "name": "Target",
        "id": "29-Target",
        "type": "area",
        "color": "steelblue",
        "data": [
          {
            "name": "2020 October – Q1",
            "y": 11452,
            "x": 1
          },
          {
            "name": "2019 January – Q2",
            "y": 11452,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 11452,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 11452,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "Achievement",
        "id": "29-Achievement",
        "type": "area",
        "color": "sandybrown",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 9787,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "% Achievement",
        "id": "29-Percentage",
        "type": "spline",
        "color": "green",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 85.46,
            "x": 4
          }
        ],
        "yAxis": 1,
        "lineWidth": 0,
        "marker": {
          "radius": 5,
          "symbol": "circle"
        },
        "states": {
          "hover": {
            "lineWidth": 0,
            "lineWidthPlus": 0,
            "marker": {
              "radius": 5
            }
          }
        }
      },
      {
        "name": "Target",
        "id": "28-Target",
        "type": "area",
        "color": "steelblue",
        "data": [
          {
            "name": "2020 October – Q1",
            "y": 11739,
            "x": 1
          },
          {
            "name": "2019 January – Q2",
            "y": 11739,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 11739,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 11739,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "Achievement",
        "id": "28-Achievement",
        "type": "area",
        "color": "sandybrown",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 11548,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "% Achievement",
        "id": "28-Percentage",
        "type": "spline",
        "color": "green",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 98.37,
            "x": 4
          }
        ],
        "yAxis": 1,
        "lineWidth": 0,
        "marker": {
          "radius": 5,
          "symbol": "circle"
        },
        "states": {
          "hover": {
            "lineWidth": 0,
            "lineWidthPlus": 0,
            "marker": {
              "radius": 5
            }
          }
        }
      },
      {
        "name": "Target",
        "id": "13-Target",
        "type": "area",
        "color": "steelblue",
        "data": [
          {
            "name": "2020 October – Q1",
            "y": 3602,
            "x": 1
          },
          {
            "name": "2019 January – Q2",
            "y": 3602,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 3602,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 3602,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "Achievement",
        "id": "13-Achievement",
        "type": "area",
        "color": "sandybrown",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 3187,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "% Achievement",
        "id": "13-Percentage",
        "type": "spline",
        "color": "green",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 88.48,
            "x": 4
          }
        ],
        "yAxis": 1,
        "lineWidth": 0,
        "marker": {
          "radius": 5,
          "symbol": "circle"
        },
        "states": {
          "hover": {
            "lineWidth": 0,
            "lineWidthPlus": 0,
            "marker": {
              "radius": 5
            }
          }
        }
      },
      {
        "name": "Target",
        "id": "31-Target",
        "type": "area",
        "color": "steelblue",
        "data": [
          {
            "name": "2020 October – Q1",
            "y": 17555,
            "x": 1
          },
          {
            "name": "2019 January – Q2",
            "y": 17555,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 17555,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 17555,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "Achievement",
        "id": "31-Achievement",
        "type": "area",
        "color": "sandybrown",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 14977,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "% Achievement",
        "id": "31-Percentage",
        "type": "spline",
        "color": "green",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 85.31,
            "x": 4
          }
        ],
        "yAxis": 1,
        "lineWidth": 0,
        "marker": {
          "radius": 5,
          "symbol": "circle"
        },
        "states": {
          "hover": {
            "lineWidth": 0,
            "lineWidthPlus": 0,
            "marker": {
              "radius": 5
            }
          }
        }
      },
      {
        "name": "Target",
        "id": "32-Target",
        "type": "area",
        "color": "steelblue",
        "data": [
          {
            "name": "2020 October – Q1",
            "y": 42318,
            "x": 1
          },
          {
            "name": "2019 January – Q2",
            "y": 42318,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 42318,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 42318,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "Achievement",
        "id": "32-Achievement",
        "type": "area",
        "color": "sandybrown",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 35903,
            "x": 4
          }
        ],
        "marker": {
          "enabled": false
        }
      },
      {
        "name": "% Achievement",
        "id": "32-Percentage",
        "type": "spline",
        "color": "green",
        "data": [
          {
            "name": "2019 January – Q2",
            "y": 0,
            "x": 2
          },
          {
            "name": "2019 April – Q3",
            "y": 0,
            "x": 3
          },
          {
            "name": "2019 July – Q4",
            "y": 84.84,
            "x": 4
          }
        ],
        "yAxis": 1,
        "lineWidth": 0,
        "marker": {
          "radius": 5,
          "symbol": "circle"
        },
        "states": {
          "hover": {
            "lineWidth": 0,
            "lineWidthPlus": 0,
            "marker": {
              "radius": 5
            }
          }
        }
      }
    ],
    "ip_percentage_achievement_series": {
      "name": "% Achievement",
      "data": [
        {
          "name": "APIN",
          "y": 75.74479267032216
        }
      ]
    },
    "state_percentage_achievement_series": {
      "name": "% Achievement",
      "data": [
        {
          "name": "Benue",
          "y": <?php echo ($statePerState[0]->active*100)/163146  ?>
        },
        {
          "name": "Ekiti",
          "y": <?php echo ($statePerState[1]->active*100)/3602  ?>
        },
        {
          "name": "Ogun",
          "y": <?php echo ($statePerState[2]->active*100)/11739  ?>
        },
        {
          "name": "Ondo",
          "y": <?php echo ($statePerState[3]->active*100)/11452  ?>
        },
        {
          "name": "Osun",
          "y":<?php echo ($statePerState[4]->active*100)/5288  ?>
        },
        {
          "name": "Oyo",
          "y": <?php echo ($statePerState[5]->active*100)/17555  ?>
        },
        {
          "name": "Plateau",
          "y": <?php echo ($statePerState[6]->active*100)/42318  ?>
        }
      ]
    }
  },
  "search": {
    "indicator": "tx_curr",
    "iPs": [
      "APIN"
    ],
    "lgaCodes": null,
    "stateCodes": null,
    "facilities": null,
    "sex": null,
    "from": null,
    "to": null,
    "quarter": null,
    "weight": null,
    "includeProcessed": null,
    "reportType": null
  },
  "_countData": {
    "allPatient": 439240,
    "stateCount": 7,
    "lgaCount": 98,
    "facilityCount": 329,
    "ipCount": 1
  }
}
  render_tx_curr_charts(data._data);
function shared_render_tx_charts(data, ip_achievement_chart_id, ip_achievement_chart_title, state_achievement_chart_id, state_achievement_chart_title, showRegression = true) {
          console.log(data)
            var ipLargestXData = data.ip_achievement_drill_down_series.map(d => d.data)
                .sort((a, b) => a.length > b.length ? -1 : (a.length == b.length ? 0 : 1)) //do an inverse sort
                [0]; //pick the first one which should now be the largest

            build_superimposed_column_chart_dual_axis(ip_achievement_chart_id,
                ip_achievement_chart_title, "Number of Patients", '% Achievement',
                data.ips,
                data.ip_target_series.data, 'Target',
                data.ip_achievement_series.data, 'Achievement',
                data.ip_percentage_achievement_series.data, '% Achievement', false, "IP", null, data.ip_achievement_drill_down_series, (e) => {
                    var chart = e.target,
                        drilldowns = chart.userOptions.drilldown.series,
                        point = e.point;

                    e.preventDefault();

                    //re-title
                    chart.setTitle({ text: chart.userOptions.title.text + " \u2014 " + e.point.name })

                    var drilldownId = point.drilldown; //do this as it may be cleared anytime during the foreach
                    Highcharts.each(drilldowns, function (p) {
                        if (p.id.includes(drilldownId)) {
                            if (showRegression && p.id.includes("Achievement") && p.regression === undefined) {
                                //add regression line
                                p.regression = true;
                                p.regressionSettings = {
                                    type: 'linear',
                                    color: '#376555', // 'rgba(255, 70, 70, .9)',
                                    xData: ipLargestXData,
                                    dashStyle: 'Dot'
                                };
                            }

                            chart.addSingleSeriesAsDrilldown(point, p);
                        }
                    });

                    chart.applyDrilldown();
                }, (e) => {
                    var chart = e.target, name = (e.point || {}).name;
                    if (name) {
                        //re-title
                        chart.setTitle({ text: chart.userOptions.title.text + " \u2014 " + name })
                    } else {
                        //reset title
                        chart.setTitle({ text: chart.userOptions.title.text })
                    }
                });

            var stateLargestXData = data.state_achievement_drill_down_series.map(d => d.data)
                .sort((a, b) => a.length > b.length ? -1 : (a.length == b.length ? 0 : 1)) //do an inverse sort
                [0]; //pick the first one which should now be the largest

            build_superimposed_column_chart_dual_axis(state_achievement_chart_id,
                state_achievement_chart_title, "Number of Patients", '% Achievement',
                data.ips,
                data.state_target_series.data, 'Target',
                data.state_achievement_series.data, 'Achievement',
                data.state_percentage_achievement_series.data, '% Achievement', false, "State", null, data.state_achievement_drill_down_series, (e) => {
                    var chart = e.target,
                        drilldowns = chart.userOptions.drilldown.series,
                        point = e.point;

                    e.preventDefault();

                    //re-title
                    chart.setTitle({ text: chart.userOptions.title.text + " \u2014 " + e.point.name })

                    var drilldownId = point.drilldown; //do this as it may be cleared anytime during the foreach
                    Highcharts.each(drilldowns, function (p) {
                        if (p.id.includes(drilldownId)) {
                            if (showRegression && p.id.includes("Achievement") && p.regression === undefined) {
                                //add regression line
                                p.regression = true;
                                p.regressionSettings = {
                                    type: 'linear',
                                    color:'#376555', // 'rgba(255, 70, 70, .9)',
                                    xData: stateLargestXData,
                                    dashStyle: 'Dot'
                                };
                            }

                            chart.addSingleSeriesAsDrilldown(point, p);
                        }
                    });

                    chart.applyDrilldown();
                }, (e) => {
                    var chart = e.target, name = (e.point || {}).name;
                    if (name) {
                        //re-title
                        chart.setTitle({ text: chart.userOptions.title.text + " \u2014 " + name })
                    } else {
                        //reset title
                        chart.setTitle({ text: chart.userOptions.title.text })
                    }
                });
        }


        function render_tx_curr_charts(data) {
            shared_render_tx_charts(data, "tx_curr_ip_achievement_chart",
                "", "tx_curr_state_achievement_chart",
                "", false);
        }
</script>
    <?php }?>
@endsection
