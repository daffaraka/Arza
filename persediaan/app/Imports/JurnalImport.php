<?php

namespace App\Imports;

use App\Models\Jurnal;
use Maatwebsite\Excel\Concerns\ToModel;

class JurnalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jurnal([
            'tanggal' => $row[1],
            'transaksi' => $row[2],
            'uraian' => $row[1],
            'debit' => $row[2],
            'kredit' => $row[2],
        ]);
    }
}
