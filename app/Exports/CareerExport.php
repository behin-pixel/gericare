<?php

namespace App\Exports;

use App\Models\Career;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CareerExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
   
    public function collection()
    {
       
        return Career::select('name','email','mobile','designation','relevant_experience','message','created_at')
        ->get();
    }
    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Mobile',           
            'Designation',
            'Relevant Experience',
            'Cover Letter',
            'Submitted Date',
        ];
    }
}
