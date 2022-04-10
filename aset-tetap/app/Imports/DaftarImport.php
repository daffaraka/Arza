<?php

namespace App\Imports;

use App\Models\Daftar;
use Maatwebsite\Excel\Concerns\ToModel;

class DaftarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Daftar([
            'kode_barang' => $row[1],
            'register' => $row[2],
            'nama' => $row[3],
            'merk' => $row[4],
            'tahun' => $row[5],
            'harga_beli' => $row[6],
            'umur_ekonomis' => $row[7],
            'biaya_peny' => $row[8],
            'jmlh_barang' => $row[9],
            'kondisi' => $row[10],
            'ket' => $row[11],
        ]);
    }
}
