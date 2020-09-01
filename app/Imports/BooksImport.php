<?php

namespace App\Imports;

use App\Book;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BooksImport implements ToModel, WithHeadingRow
{
    protected $tbl = '';
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function __construct($type = null) {
        $this->tbl = $type;
     
    }
    public function model(array $row)
    {
        $tbl = new Book([
            'State' =>$this->tbl,
            'LGA' => $row['lga'],
            'Facility' => $row['facilityname'],
            'DatimCode' => $row['datim_code'],
            'PatientUniqueID/ARTNo' => $row['patientuniqueidartno'],
            'PatientHospitalNo' => $row['patienthospitalno'],
            'Sex' => $row['sex'],
            'AgeatStartoAR(Years)' => $row['ageatstartofart'],
            'AgeatStartofART(Months)' => $row['ageinmonths'],
            // 'ARTStartDate' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['artstartdate']),
            // 'LastPickupDate' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['lastpickupdate']),
            // 'DaysOfARVRefil' => $row['daysofarvrefill'],
             'RegimenLineatARTStart' => $row['regimenlineatartstart'],
            'RegimenatARTStart' => $row['regimenatartstart'],
             'CurrentRegimenLine' => $row['currentregimenline'],
             'CurrentARTRegimen' => $row['currentartregimen'],
             'PregnancyStatus' => $row['currentpregnancystatus'],
             'CurrentViralLoad(c/ml)' => $row['currentviralload'],
            // 'DateofCurrentViralLoad(dd/mm/yy)' =>  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dateofcurrentviralload']),
            'ViralLoadIndication' => $row['viralloadindication'],
            'CurrentARTStatusCal' => $row['currentartstatus'],
            // 'ARTOutcome' => $row['artoutcome'],
            // 'NextAppointment' => $row['nextappointment'],
           // 'DaysInterval' => $row['daysinterval'],
           'CurrentAge(Years)' => $row['current_age'],
           // 'CurrentAge(Months)' => $row['currentagemonths'],
          //  'DateOfBirth' =>  \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dateofbirth']),
            'Surname' => $row['surname'],
            'Firstname' => $row['firstname'],
            'Educationallevel' => $row['educationallevel'],
            'MaritalStatus' => $row['maritalstatus'],
            'JobStatus' => $row['jobstatus'],
           'Weight' => $row['weight'],
            'WeightDate' => $row['weightdate'],
           'Whostage' => $row['whostage'],
            'Address' => $row['address'],
          'PhoneNo' => $row['phoneno'],
        ]);
        $tbl->setTable('list_'.$this->tbl);
        return $tbl;
    }
}
