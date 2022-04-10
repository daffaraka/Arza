<?php

namespace App\Exports;

use App\Models\GUSPJ;
use Maatwebsite\Excel\Concerns\FromCollection;

class SPJExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GUSPJ::all();
    }
}
