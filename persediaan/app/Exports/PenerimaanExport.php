<?php

namespace App\Exports;

use App\Models\Penerimaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PenerimaanExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penerimaan::all();
    }

    public function headings(): array
    {
        return ["your", "headings", "here"];
    }
}
