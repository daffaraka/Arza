<?php

namespace App\Imports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\ToModel;

class PeminjamanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Peminjaman([
            'peminjam' => $row[1],
            'tgl_pinjam' => $row[2],
            'kode_barang' => $row[3],
            'nama_barang' => $row[4],
            'thn_perolehan' => $row[5],
            'cara_perolehan' => $row[6],
            'jmlh_barang' => $row[7],
            'harga' => $row[8],
            'kondisi_barang' => $row[9],
            'ket' => $row[10],
        ]);
    }
}
