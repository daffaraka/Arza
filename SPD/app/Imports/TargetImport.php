<?php

namespace App\Imports;

use App\Models\Target;
use Maatwebsite\Excel\Concerns\ToModel;

class TargetImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Target([
            'tgl_input' => $row[1],
            'triwulanke' => $row[2],
            'tahun' => $row[3],
            'kode' => $row[4],
            'nama' => $row[5],
            'nominal_spd_berlalu' => $row[6],
            'nominal_spd_berjalan' => $row[7],
            'total_spd' => $row[8],
            'nominal_spj_berlalu' => $row[6],
            'nominal_spj_berjalan' => $row[7],
            'total_spj' => $row[8],
            'nominal_belum_spj' => $row[9]
        ]);
    }
}
