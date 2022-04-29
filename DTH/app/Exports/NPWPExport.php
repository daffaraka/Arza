<?php

namespace App\Exports;

use App\Models\NPWP;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NPWPExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return NPWP::all();
    }
    
    public function headings(): array
    {
        return  [
            '#','NPWP','Nama Wp',
        ];
    }
}
