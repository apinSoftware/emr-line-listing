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
                                <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                                <button
                                        class="alert-warning alert float-right hidden-xs m-l-10"><strong>All outcome are calulated from (Q2) 01 - Jan -2020<?php //echo   date('d-M-Y', strtotime($firstDateQn['firstDate'])) ?> -  <?php echo   date('d-M-Y', strtotime($lastEMRDate['last_emr_date'])) ?></strong></button>
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
                                <div class="text">Total Patients</div>
                                <div class="number"><span class="number " ><?php echo $stats[0]->total_patients ?></span></div>
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
                                <div class="text">Active</div>
                                <div class="number" ><?php echo $stats[0]->active ?></div>
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
                                <div class="text">Transferred Out</div>
                                <div class="number"><span class="number" ><?php echo $stats[0]->transferred_out ?></span></div>
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
                                <div class="text">Inactive</div>
                                <div class="number"><span class="number" ><?php echo $stats[0]->ltfu_data ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">             
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
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                    <th>State</th>
                                        <th>LGA</th>
                                        <th>Facility</th>
                                        <th>Total Patients</th>
                                        <th>Active</th>
                                        <th>Transferred Out</th>
                                        <th>Dead</th>
                                        <th>Inactive</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>State</th>
                                        <th>LGA</th>
                                        <th>Facility</th>
                                        <th>Total Patients</th>
                                        <th>Active</th>
                                        <th>Transferred Out</th>
                                        <th>Dead</th>
                                        <th>Inactive</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                  @foreach($list as $key => $r)
                                    <tr>
                                        <td>{{ ucfirst($r->state ?? '') }}</td>
                                        <td>{{ $r->lga ?? '' }}</td>
                                        <td>{{ $r->facility ?? '' }}</td>
                                        <td>{{ $r->total_patients ?? '' }}</td>
                                        <td>{{ $r->active ?? '' }}</td>
                                        <td>{{ $r->transferred_out ?? '' }}</td>
                                        <td>{{ $r->dead ?? '' }}</td>
                                        <td>{{ $r->ltfu_data ?? '' }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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


<!-- Jquery DataTable Plugin Js --> 
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>



<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
