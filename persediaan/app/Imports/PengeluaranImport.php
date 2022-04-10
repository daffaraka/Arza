<?php

namespace App\Imports;

use App\Models\Pengeluaran;
use Maatwebsite\Excel\Concerns\ToModel;

class PengeluaranImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pengeluaran([
            'nama_barang' => $row[1],
            'sumber_dana' => $row[2],
            'banyaknya' => $row[3],
            'harga_satuan' => $row[4],
            'jumlah_harga' => $row[5],
            'untuk' => $row[6],
            'tanggal_penyerahan' => $row[7],
            'keterangan' => $row[8],
        ]);
    }
}
