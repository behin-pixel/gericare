<?php

namespace App\Exports;


use App\Models\Enquiries;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CallBackReportExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Enquiries::select('name','moble_no','created_at')->where('type','request_call_back')->orderBy('id', 'DESC')
        ->get();

    }
    public function headings(): array
    {
        return [
            'Name',           
            'Mobile No',           
            'Enquiry Date',
            
        ];
    }
}
