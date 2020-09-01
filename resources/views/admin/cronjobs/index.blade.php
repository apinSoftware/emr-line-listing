@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
       <b>List of currently runnig Jobs</b>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Article">
                <thead>
                    <tr>
                        <th>
                            Appointment ID
                        </th>
                        <th>
                            Appointment Url
                        </th>
                        <th>
                            Appointment Time
                        </th>
                        <th>
                            SMS ID
                        </th>
                        <th>
                            SMS URL
                        </th>
                        <th>
                            SMS TIME
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cronJobs as $key => $cron)
                        <tr data-entry-id="{{ $cron->id }}">
                            <td>
                                {{ $cron->appointmentID ?? '' }}
                            </td>
                            <td>
                                {{ $cron->generateAppointmentUrl ?? '' }}
                            </td>
                            <td>
                                {{ $cron->appointmentTime ?? '' }}
                            </td>
                            <td>
                                {{ $cron->smsID ?? '' }}
                            </td>
                            <td>
                                {{ $cron->smsUrl ?? '' }}
                            </td>
                            <td>
                                {{ $cron->smsTime ?? '' }}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-success" href="{{ route('admin.cronjobs.edit', $cron->id) }}">
                                   Edit CronJob
                                </a>
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
        $.extend(true, $.fn.dataTable.defaults, {
        order: [[ 1, 'desc' ]],
        pageLength: 100,
        });
        $('.datatable-Article:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
        });
    })

</script>
@endsection
