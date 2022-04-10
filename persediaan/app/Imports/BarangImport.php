<?php

namespace App\Imports;

use App\Models\DaftarBarang;
use Maatwebsite\Excel\Concerns\ToModel;

class BarangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DaftarBarang([
            'nama_barang' => $row[1],
            'jenis_barang' => $row[2],
        ]);
    }
}
