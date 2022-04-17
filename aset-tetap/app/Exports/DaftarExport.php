<?php

namespace App\Exports;

use App\Models\Daftar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class DaftarExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Daftar::all();
    }

    public function headings(): array
    {
        return [
            "No",
            "Register",
            "Kode Barang",
            "Nama Barang",
            "Merk",
            "Tahun",
            "Harga Beli",
            "Umur Ekonomis",
            "Biaya Penyusutan",
            "Jumlah Barang", 
            "Kondisi",
            "Ket",
        ];
    }

}
