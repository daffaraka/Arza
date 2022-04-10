<?php

namespace App\Imports;

use App\Models\KartuStok;
use Maatwebsite\Excel\Concerns\ToModel;

class KartuStokImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KartuStok([
            'tanggal' => $row[1],
            'nama_barang' => $row[2],
            'unit_pemasukan' => $row[3],
            'harga_per_unit_pemasukan' => $row[4],
            'total_harga_pemasukan' => $row[5],
            'unit_pengeluaran' => $row[6],
            'harga_per_unit_pengeluaran' => $row[7],
            'total_harga_pengeluaran' => $row[8],
            'unit_persediaan' => $row[9],
            'harga_per_unit_persediaan' => $row[10],
            'total_harga_persediaan' => $row[11],
            'keterangan' => $row[12],
        ]);
    }
}
