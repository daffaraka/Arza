<?php

namespace App\Exports;

use App\Models\Penerimaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PenerimaanExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penerimaan::all();
    }

    public function headings(): array
    {
        return [
            "No",
            "Tanggal", 
            "Dari", 
            "Tanggal Faktur",
            "Nama Barang",
            "Sumber Dana",
            "Banyaknya",
            "Harga Satuan",
            "Jumlah Harga",
            "Tanggal Penerimaan",
            "Keterangan",
        ];
    }
}
