<?php

namespace App;

use App\Patients;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApointmentTemp extends Model
{
    use SoftDeletes;

    public $table = 'appointments_temp';

    protected $fillable = [
        'PhoneNumber',
        'Sent'
    ];

    public function patients()
    {
        return $this->belongsTo('App\Patients', 'PepID', 'PepID');
    }



}
