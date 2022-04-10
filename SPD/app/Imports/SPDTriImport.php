<?php

namespace App\Imports;

use App\Models\SPDTriwulan;
use Maatwebsite\Excel\Concerns\ToModel;

class SPDTriImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SPDTriwulan([
            'periode_tri' => $row[1],
            'tahun' => $row[2],
            'kode' => $row[3],
            'nama' => $row[4],
            'jan' => $row[5],
            'feb' => $row[6],
            'mar' => $row[7],
            'total_spd_berjalan' => $row[8],
            'total_spj_berjalan' => $row[9],
            'total_spd_saat_ini' => $row[10],
            'total_spj_saat_ini' => $row[11],
            'nominal_blm_spj' => $row[11]
        ]);
    }
}
