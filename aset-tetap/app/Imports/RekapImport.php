<?php

namespace App\Imports;

use App\Models\Rekap;
use Maatwebsite\Excel\Concerns\ToModel;

class RekapImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rekap([
            'kode' => $row[0],
            'aset' => $row[1],
        ]);
    }
}
