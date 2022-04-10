<?php

namespace App\Imports;

use App\Models\Mutasi;
use Maatwebsite\Excel\Concerns\ToModel;

class MutasiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mutasi([
            'kode_barang' => $row[1],
            'register' => $row[2],
            'nama' => $row[3],
            'merk' => $row[4],
            'bahan' => $row[5],
            'cara_perolehan' => $row[6],
            'ukuran_barang' => $row[7],
            'satuan' => $row[8],
            'kondisi' => $row[9],
            'barang' => $row[10],
            'harga' => $row[11],
        ]);
    }
}
