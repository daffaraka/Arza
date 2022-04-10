<?php

namespace App\Exports;

use App\Models\KartuStok;
use Maatwebsite\Excel\Concerns\FromCollection;

class KartuStokExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KartuStok::all();
    }
}
