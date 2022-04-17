<?php

namespace App\Exports;

use App\Models\KartuStok;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KartuStokExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KartuStok::all();
    }

    public function headings(): array
    {
        return ["your", "headings", "here"];
    }
}
