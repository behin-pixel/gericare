<?php

namespace App\Exports;


use App\Models\Enquiries;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\BookAppointment;

class ServiceAppReportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BookAppointment::select('appointment_services','name','mobile_no','email','appointment_date','appointment_time','message')->where('enquiry_from','service_appointment')->orderBy('id', 'DESC')
        ->get();

    }
    public function headings(): array
    {
        return [
            'Appointment Services',  
            'Client Name',           
            'Mobile No',
            'Email',   
            'Appointment Date',    
            'Appointment Time',           
            'Message',
            
        ];
    }
}
