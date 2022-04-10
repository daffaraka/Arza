<?php

namespace App\Imports;

use App\Models\GUSPJ;
use Maatwebsite\Excel\Concerns\ToModel;

class SPJImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new GUSPJ([
            'tgl_input' => $row[1],
            'triwulanke' => $row[2],
            'tahun' => $row[3],
            'kode' => $row[4],
            'nama_kegiatan' => $row[5],
            'spj_gu_ke' => $row[6],
            'nominal' => $row[7],
            'total' => $row[8]
        ]);
    }
}
