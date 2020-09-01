<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patients extends Model
{
    use SoftDeletes;

    public $table = 'patients';

    protected $fillable = [
        'IP',
        'State',
        'LGA',
        'Datim_Code',
        'FacilityName',
        'PepID',
        'PatientHospitalNo',
        'PreviousID',
        'Sex',
        'Ageatstartofart',
        'Ageinmonths',
        'ARTStartDate',
        'LastPickupdate',
        'Days Of ARV Refill',
        'RegimenLineAtARTStart',
        'RegimenAtARTStart',
        'CurrentRegimenLine',
        'CurrentARTRegimen',
        'CurrentPregnancyStatus',
        'CurrentViralLoad',
        'DateofCurrentViralLoad',
        'ViralLoadIndication',
        'CurrentARTStatus',
        'DOB',
        'Current_Age',
        'TI',
        'Surname',
        'Firstname',
        'Educationallevel',
        'MaritalStatus',
        'JobStatus',
        'PhoneNo',
        'Address'
    ];

    public function apointmentTemp()
    {
        return $this->hasMany(ApointmentTemp::class);
    }

}
