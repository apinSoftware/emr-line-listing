@extends('layouts.admin')
@section('content')

<div class="card">


    <div class="card-body">
        <form action="{{ route("admin.cronjobs.update", [$cronJob->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group" style="display:none">
                <input type="text" id="id" name="id" class="form-control" value="{{ $cronJob->id }}" required>
            </div>
            <div class="form-group {{ $errors->has('appointmentID') ? 'has-error' : '' }}">
                <label for="name">Appointment ID *</label>
                <input type="text" id="name" name="appointmentID" class="form-control" value="{{ old('appointmentID', isset($cronJob) ? $cronJob->appointmentID : '') }}" required>
                @if($errors->has('appointmentID'))
                    <em class="invalid-feedback">
                        {{ $errors->first('appointmentID') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('generateAppointmentUrl') ? 'has-error' : '' }}">
                <label for="name">Appointment Url *</label>
                <input type="text" id="name" name="generateAppointmentUrl" class="form-control" value="{{ old('generateAppointmentUrl', isset($cronJob) ? $cronJob->generateAppointmentUrl : '') }}" required>
                @if($errors->has('generateAppointmentUrl'))
                    <em class="invalid-feedback">
                        {{ $errors->first('generateAppointmentUrl') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('appointmentTime') ? 'has-error' : '' }}">
                <label for="name">Appointment Job Time *</label>
                <input type="text" id="name" name="appointmentTime" class="form-control" value="{{ old('appointmentTime', isset($cronJob) ? $cronJob->appointmentTime : '') }}" required>
                @if($errors->has('appointmentTime'))
                    <em class="invalid-feedback">
                        {{ $errors->first('appointmentTime') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('smsID') ? 'has-error' : '' }}">
                <label for="name">SMS Job ID *</label>
                <input type="text" id="name" name="smsID" class="form-control" value="{{ old('smsID', isset($cronJob) ? $cronJob->smsID : '') }}" required>
                @if($errors->has('smsID'))
                    <em class="invalid-feedback">
                        {{ $errors->first('smsID') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('smsUrl') ? 'has-error' : '' }}">
                <label for="name">SMS Job Url*</label>
                <input type="text" id="name" name="smsUrl" class="form-control" value="{{ old('smsUrl', isset($cronJob) ? $cronJob->smsUrl : '') }}" required>
                @if($errors->has('smsUrl'))
                    <em class="invalid-feedback">
                        {{ $errors->first('smsUrl') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('smsTime') ? 'has-error' : '' }}">
                <label for="name">SMS Time *</label>
                <input type="text" id="name" name="smsTime" class="form-control" value="{{ old('smsTime', isset($cronJob) ? $cronJob->smsTime : '') }}" required>
                @if($errors->has('smsTime'))
                    <em class="invalid-feedback">
                        {{ $errors->first('smsTime') }}
                    </em>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection
