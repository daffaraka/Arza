<?php

namespace App\Imports;

use App\Models\Penerimaan;
use Maatwebsite\Excel\Concerns\ToModel;

class PenerimaanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penerimaan([
            'tanggal' => $row[1],
            'dari' => $row[2],
            'tanggal_faktur' => $row[3],
            'nama_barang' => $row[4],
            'sumber_dana' => $row[5],
            'banyaknya' => $row[6],
            'harga_satuan' => $row[7],
            'jumlah_harga' => $row[8],
            'tanggal_penerimaan' => $row[9],
            'keterangan' => $row[10],
        ]);
    }
}
