<?php

namespace App\Exports;

use App\Models\KartuStok;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KartuStokExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KartuStok::all();
    }

    public function headings(): array
    {
        return [
            "No",
            "Tanggal", 
            "Nama Barang", 
            "Unit Pemasukan",
            "Harga Per-Unit Pemasukan", 
            "Total Harga Pemasukkan",
            "Unit Pengeluaran", 
            "Harga Per-Unit Pengeluaran",
            "Total Harga Pengeluaran", 
            "Unit Persediaan",
            "Harga Per-Unit Persediaan", 
            "Total Harga Persediaan",
            "Keterangan", 
        ];
    }
}
