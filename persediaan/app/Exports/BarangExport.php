<?php

namespace App\Exports;

use App\Models\DaftarBarang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DaftarBarang::all();
    }

    public function headings(): array
    {
        return [
            "ID", 
            "Nama Barang", 
            "Jenis Barang"
        ];
    }
}
