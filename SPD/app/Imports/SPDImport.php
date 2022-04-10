<?php

namespace App\Imports;

use App\Models\GUSPD;
use Maatwebsite\Excel\Concerns\ToModel;

class SPDImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new GUSPD([
            'tgl_input' => $row[1],
            'periode_triwulan' => $row[2],
            'tahun' => $row[3],
            'kode_rek' => $row[4],
            'nama_kegiatan' => $row[5],
            'bulan1' => $row[6],
            'nominal_bulan1' => $row[7],
            'bulan2' => $row[8],
            'nominal_bulan2' => $row[9],
            'bulan3' => $row[10],
            'nominal_bulan3' => $row[11],
            'jumlah_spd' => $row[12],
        ]);
    }
}
