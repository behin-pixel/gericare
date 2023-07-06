<?php

namespace App\Exports;


use App\Models\Enquiries;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ConsultReportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Enquiries::select('name','email','moble_no','services','message','created_at')->where('type','consult')->orderBy('id', 'DESC')
        ->get();

    }
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Mobile No',
            'Service Type',
            'Message',
            'Enquiry Date',
            
        ];
    }
}
