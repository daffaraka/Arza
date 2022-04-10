<?php

namespace App\Imports;

use App\Models\Aset;
use Maatwebsite\Excel\Concerns\ToModel;

class AsetImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aset([
            'kode_barang' => $row[1],
            'nama_barang' => $row[2],
            'jumlah' => $row[3],
            'harga' => $row[4],
        ]);
    }
}
