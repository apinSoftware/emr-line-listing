<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CronJobs extends Model
{
    use SoftDeletes;

    public $table = 'cronjob';
    protected $fillable = [
        'appointmentID',
        'generateAppointmentUrl',
        'appointmentTime',
        'smsID',
        'smsUrl',
        'smsTime'
    ];

}
