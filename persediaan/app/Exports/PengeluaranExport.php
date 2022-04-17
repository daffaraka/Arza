<?php

namespace App\Exports;

use App\Models\Pengeluaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengeluaranExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengeluaran::all();
    }

    public function headings(): array
    {
        return  [
            "No",
            "Nama Barang",
            "Sumber Dana",
            "Banyaknya",
            "Harga Satuan",
            "Jumlah Harga",
            "Untuk",
            "Tanggal Penyerahan",
            "Keterangan",
        ];
    }
}
