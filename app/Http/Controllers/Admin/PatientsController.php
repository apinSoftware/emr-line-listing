<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\User;
use App\Patients;
use App\ApointmentTemp;
use App\AppointmentHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\QueryBuilder\QueryBuilder;
use App\Http\Requests\MassDestroyUserRequest;

class PatientsController extends Controller
{
    public function index()
    {
        if(request()->has('states')){
            $patients = Patients::where('State',request('states'))->paginate(200)->appends('states',request('gender'));
        }else{
            $patients = Patients::paginate(200);
        }
        $states =  DB::table('tblstate')->get();
        $lgas =  DB::table('tbllga')->get();
        return view('admin.patients.index', compact('patients','states','lgas'));
    }

    public function currentAppointments()
    {
        $lgas =  DB::table('tbllga')->get();
        $states =  DB::table('tblstate')->get();
        $query = ApointmentTemp::Class;
        $total = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->count();
        $appointments = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->get();
        $pending = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->where(['Sent'=>0])->count();
        $sent = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->where(['Sent'=>1])->count();
        $failed = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->where(['Sent'=>2])->count();

        return view('admin.patients.appointments', compact('appointments','states','lgas','total','pending','sent','failed'));
    }

    public function historyAppointments()
    {
        $query = AppointmentHistory::Class;
        $lgas =  DB::table('tbllga')->get();
        $states =  DB::table('tblstate')->get();
        $appointments = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->get();
        $total = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->count();
        $pending = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->where(['Sent'=>0])->count();
        $sent = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->where(['Sent'=>1])->count();
        $failed = QueryBuilder::for($query)->allowedFilters(['Patients.State','Patients.lga'])->where(['Sent'=>2])->count();

        return view('admin.patients.appointmentsHistory', compact('appointments','states','lgas','total','pending','sent','failed'));
    }

}
