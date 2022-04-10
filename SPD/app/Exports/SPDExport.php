<?php

namespace App\Exports;

use App\Models\GUSPD;
use Maatwebsite\Excel\Concerns\FromCollection;

class SPDExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GUSPD::all();
    }
}
