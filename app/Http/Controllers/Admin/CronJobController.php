<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\CronJobs;
use App\Patients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCronJobRequest;
use App\Http\Requests\MassDestroyUserRequest;

class CronJobController extends Controller
{
    public function index()
    {
        $cronJobs =  DB::table('cronjob')->get();
        return view('admin.cronjobs.index', compact('cronJobs'));
    }

    public function edit($cronJobID)
    {
        $cronJob = DB::table('cronjob')->where(['id'=>$cronJobID])->first();
        return view('admin.cronjobs.edit', compact('cronJob'));
    }

    public function update(UpdateCronJobRequest $request, CronJobs $cronJob)
    {
        $cronJobInstance = new CronJobs;
        $job[0]['id'] =  $request->id;
        $job[0]['appointmentID'] =  $request->appointmentID;
        $job[0]['generateAppointmentUrl'] =  $request->generateAppointmentUrl;
        $job[0]['appointmentTime'] =  $request->appointmentTime;
        $job[0]['smsID'] =  $request->smsID;
        $job[0]['smsUrl'] =  $request->smsUrl;
        $job[0]['smsTime'] =  $request->smsTime;

        \Batch::update($cronJobInstance, $job, 'id');

        $client = new \GuzzleHttp\Client();
        $response = $client->post('http://localhost:89/api/sms/sms', [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode([
                'appointmentID' => $request->appointmentID,
                'generateAppointmentUrl' => $request->generateAppointmentUrl,
                'appointmentTime' =>  $request->appointmentTime,
                'smsID'=>$request->smsID,
                'smsUrl'=>$request->smsUrl,
                'smsTime'=>$request->smsTime
            ])
        ]);

       /*  $response = $guzzleClient->post('api/sms/sms', [
            'query' => [
                'appointmentID' => $request->appointmentID,
                'generateAppointmentUrl' => $request->generateAppointmentUrl,
                'appointmentTime' =>  $request->appointmentTime,
                'smsID'=>$request->smsID,
                'smsUrl'=>$request->smsUrl,
                'smsTime'=>$request->smsTime
            ]
        ]); */

        $res = $response->getBody();
        return redirect()->route('admin.cronjobs.index');
    }


}
