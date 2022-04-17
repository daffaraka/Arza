<?php

namespace App\Exports;

use App\Models\Mutasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MutasiExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mutasi::all();
    }

    public function headings(): array
    {
        return [
            "No",
            "Register",
            "Kode Barang",
            "Nama Barang",
            "Merk",
            "Bahan",
            "Cara Perolehan",
            "Ukuran Barang",
            "Satuan",
            "Kondisi", 
            "Barang",
            "Harga",
        ];
    }
}
