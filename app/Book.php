<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
   // public $table = 'list_benue';

  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'State',
        'LGA',
        'Facility',
        'DatimCode',
        'PatientUniqueID/ARTNo',
        'PatientHospitalNo',
        'Sex',
        'AgeatStartoAR(Years)',
        'AgeatStartofART(Months)',
        'ARTStartDate',
        'LastPickupDate',
        'DaysOfARVRefil',
        'RegimenLineatARTStart',
        'RegimenatARTStart',
        'CurrentRegimenLine',
        'CurrentARTRegimen',
        'PregnancyStatus',
        'CurrentViralLoad(c/ml)',
        'DateofCurrentViralLoad(dd/mm/yy)',
        'ViralLoadIndication',
        'CurrentARTStatusCal',
        'ARTOutcome',
        'NextAppointment',
        'DaysInterval',
        'CurrentAge(Years)',
        'CurrentAge(Months)',
        'DateOfBirth',
        'Surname',
        'Firstname',
        'Educationallevel',
        'MaritalStatus',
        'JobStatus',
        'Weight',
        'WeightDate',
        'Whostage',
        'Address',
        'PhoneNo'
    ];
}
