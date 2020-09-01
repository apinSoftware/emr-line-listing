@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-3 col-lg-3">
    <div class="card text-white bg-gradient-primary">
    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
    <div>
    <div class="text-value-lg">{{$total}}</div>
    <div style="font-size:13px">Total Patients scheduled for appointment</div>
    </div>
    </div>
    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="chart chartjs-render-monitor" id="card-chart1" height="87" width="507" style="display: block; height: 70px; width: 406px;"></canvas>
    </div>
    </div>
    </div>

    <div class="col-sm-3 col-lg-3">
        <div class="card text-white bg-gradient-dark">
        <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
        <div>
        <div class="text-value-lg">{{$pending}}</div>
        <div>Total pending SMS</div>
        </div>
        </div>
        <div class="c-chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87" width="547" style="display: block; height: 70px; width: 438px;"></canvas>
        </div>
        </div>
        </div>

    <div class="col-sm-3 col-lg-3">
    <div class="card text-white bg-gradient-warning">
    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
    <div>
    <div class="text-value-lg">{{$sent}}</div>
    <div>Total SMS sent</div>
    </div>
    </div>
    <div class="c-chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="chart chartjs-render-monitor" id="card-chart3" height="87" width="547" style="display: block; height: 70px; width: 438px;"></canvas>
    </div>
    </div>
    </div>

    <div class="col-sm-3 col-lg-3">
    <div class="card text-white bg-gradient-danger">
    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
    <div>
    <div class="text-value-lg">{{$failed}}</div>
    <div>Total Failed SMS</div>
    </div>
    </div>
    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <canvas class="chart chartjs-render-monitor" id="card-chart4" height="87" width="507" style="display: block; height: 70px; width: 406px;"></canvas>
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
                            Surname
                        </th>
                        <th>
                            Firstname
                        </th>
                        <th>
                            Firstname
                        </th>
                        <th>
                            PepID
                        </th>
                        <th>SMS Processed  Yes/No</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $key => $app)
                        <tr data-entry-id="{{ $app->id }}">
                            <td></td>
                            <td>
                                {{ $app->patients->State ?? '' }}
                            </td>
                            <td>
                                {{ $app->patients->LGA ?? '' }}
                            </td>
                            <td>
                                {{ $app->patients->Surname ?? '' }}
                            </td>
                            <td>
                                {{ $app->patients->Firstname ?? '' }}
                            </td>
                            <td>
                                {{ $app->PepID ?? '' }}
                            </td>
                            <td>
                                {{ $app->PhoneNumber ?? '' }}
                            </td>
                            <td>
                                {{ $app->Sent == 1 ? 'Yes': 'No' }}

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
