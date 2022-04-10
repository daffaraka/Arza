<?php

namespace App\Exports;

use App\Models\SPDTriwulan;
use Maatwebsite\Excel\Concerns\FromCollection;

class SPDTriExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SPDTriwulan::all();
    }
}
