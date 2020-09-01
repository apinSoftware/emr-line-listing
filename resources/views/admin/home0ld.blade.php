@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-2 col-lg-2">
    <div class="card text-white bg-gradient-primary">
    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
    <div>
    <div class="text-value-lg"><?php echo $stats[0]->total_patients ?></div>
    <div style="font-size:13px">Total Patients </div>
    </div>
    </div>
    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="chart chartjs-render-monitor" id="card-chart1" height="87" width="507" style="display: block; height: 70px; width: 406px;"></canvas>
    </div>
    </div>
    </div>

    <div class="col-sm-2 col-lg-2">
        <div class="card text-white bg-gradient-dark">
        <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
        <div>
        <div class="text-value-lg"><?php echo $stats[0]->active ?></div>
        <div>Active</div>
        </div>
        </div>
        <div class="c-chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87" width="547" style="display: block; height: 70px; width: 438px;"></canvas>
        </div>
        </div>
    </div>  

    <div class="col-sm-2 col-lg-2">
    <div class="card text-white bg-gradient-warning">
    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
    <div>
    <div class="text-value-lg"><?php echo $stats[0]->transferred_out ?></div>
    <div>Transferred Out</div>
    </div>
    </div>
    <div class="c-chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87" width="547" style="display: block; height: 70px; width: 438px;"></canvas>
    </div>
    </div>
    </div>

    <div class="col-sm-2 col-lg-2">
    <div class="card text-white bg-gradient-warning">
    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
    <div>
    <div class="text-value-lg"><?php echo $stats[0]->dead ?></div>
    <div>Dead</div>
    </div>
    </div>
    <div class="c-chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87" width="547" style="display: block; height: 70px; width: 438px;"></canvas>
    </div>
    </div>
    </div>
    <div class="col-sm-2 col-lg-2">
    <div class="card text-white bg-gradient-warning">
    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
    <div>
    <div class="text-value-lg"><?php echo $stats[0]->ltfu_data ?></div>
    <div>Inactive</div>
    </div>
    </div>
    <div class="c-chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87" width="547" style="display: block; height: 70px; width: 438px;"></canvas>
    </div>
    </div>
    </div>

    </div>
<div class="card">
    <div class="card-header">
       <b>PATIENT WEEKLY APPOINTMENTS LIST </b>
    </div>
    <div class="card-body">
        <form class="row" method="GET">
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">States</label>
              <select class="form-control select2" id="sel1" name="filter[Patients.State]">
                <option value="">Select Option</option>
                @foreach($states as $id => $state)
                    <option value="{{ $state->statename  }}">{{ $state->statename }}</option>
                @endforeach
              </select>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputPassword1">Lga</label>
              <select class="form-control select2" id="sel1" name="filter[Patients.lga]">
                <option value="">Select Option</option>
                @foreach($lgas as $id => $lga)
                  <option value="{{ $lga->LGA  }}">{{ $lga->LGA }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-3">
                <label for="exampleInputPassword1">.</label>
            <button type="submit" class="form-control btn btn-primary">Submit</button>
            </div>
          </form>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-APP">
                <thead>
                    <tr>
                        <th width="10"></th>
                        <th>
                            State
                        </th>
                        <th>
                            LGA
                        </th>
                        <th>
                            Facility
                        </th>
                        <th>
                        Total Patients
                        </th>
                        <th>
                        Active
                        </th>
                        <th>
                        Transferred Out
                        </th>
                        <th>
                        Dead
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $key => $r)
                        <tr >
                            <td></td>
                            <td>
                                {{ $r->State ?? '' }}
                            </td>
                            <td>
                                {{ $r->LGA ?? '' }}
                            </td>
                            <td>
                                {{ $r->Facility ?? '' }}
                            </td>
                            <td>
                                {{ $r->total_patients ?? '' }}
                            </td>
                            <td>
                                {{ $r->active ?? '' }}
                            </td>
                            <td>
                                {{ $r->transferred_out ?? '' }}
                            </td>
                            <td>
                                {{ $r->dead ?? '' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>


    </div>

</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

        $.extend(true, $.fn.dataTable.defaults, {
        order: [[ 1, 'desc' ]],
        pageLength: 100,
        });
        $('.datatable-APP:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
        });
    })

</script>
@endsection
