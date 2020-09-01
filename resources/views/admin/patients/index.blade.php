@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
       <b>Patient Line List</b>
    </div>
    <div class="card-body">
        <form class="row" method="GET">
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">States</label>
              <select class="form-control select2" id="sel1" name="states">
                @foreach($states as $id => $state)
                    <option value="{{ $state->statename  }}">{{ $state->statename }}</option>
                @endforeach
              </select>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputPassword1">Lga</label>
              <select class="form-control select2" id="sel1" name="lga">
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
            <table class=" table table-bordered table-striped table-hover datatable datatable-Article">
                <thead>
                    <tr>
                        <th width="10"></th>
                        <th>
                            ID
                        </th>
                        <th>
                            State
                        </th>
                        <th>
                            LGA
                        </th>
                        <th>
                            FacilityName
                        </th>
                        <th>
                            PepID
                        </th>
                        <th>
                            Sex
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $key => $patient)
                        <tr data-entry-id="{{ $patient->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $patient->id ?? '' }}
                            </td>
                            <td>
                                {{ $patient->State ?? '' }}
                            </td>
                            <td>
                                {{ $patient->LGA ?? '' }}
                            </td>
                            <td>
                                {{ $patient->FacilityName ?? '' }}
                            </td>
                            <td>
                                {{ $patient->PepID ?? '' }}
                            </td>
                            <td>
                                {{ $patient->Sex ?? '' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $patients->links('partials.pagination') }}
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
