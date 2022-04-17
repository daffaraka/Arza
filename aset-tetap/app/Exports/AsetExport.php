<?php

namespace App\Exports;

use App\Models\Aset;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AsetExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

   

    public function collection()
    {
        return Aset::all();
    }

    public function headings(): array
    {
        return ["No", "Kode Barang", "Nama Barang","Jumlah", "Harga"];
    }

   
}
