<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentHistory extends Model
{
    use SoftDeletes;

    public $table = 'appointments';

    protected $fillable = [
        'PhoneNumber',
        'Sent'
    ];

    public function patients()
    {
        return $this->belongsTo('App\Patients', 'PepID', 'PepID');
    }

}
