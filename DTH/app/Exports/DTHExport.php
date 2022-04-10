<?php

namespace App\Exports;

use App\Models\DTH;
use Maatwebsite\Excel\Concerns\FromCollection;

class DTHExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DTH::all();
    }
}
