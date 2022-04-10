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
            'kode' => $row[2],
            'nama' => $row[2],
        ]);
    }
}
