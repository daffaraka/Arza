<?php

namespace App\Exports;

use App\Models\DaftarBarang;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DaftarBarang::all();
    }
}
