<?php

namespace App\Exports;

use App\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BooksExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Book::all();
    }

    public function headings(): array
    {
        return [
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
}
