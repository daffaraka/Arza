<?php

namespace App\Exports;

use App\Models\Penerimaan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenerimaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penerimaan::all();
    }
}
