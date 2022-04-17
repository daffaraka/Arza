<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PeminjamanExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Peminjaman::all();
    }

    public function headings(): array
    {
        return [
            "No",
            "Peminjam",
            "Tanggal Peminjam",
            "Kode Barang",
            "Nama Barang",
            "Tahun Perolehan",
            "Cara Perolehan",
            "Jumlah Barang",
            "Harga",
            "Kondisi Barang", 
            "Keterangan",
        ];
    }
}
