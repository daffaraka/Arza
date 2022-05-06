<?php

namespace App\Imports;

use App\Models\DTH;
use Maatwebsite\Excel\Concerns\ToModel;

class DTHImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DTH([
            'kode_akun' => $row[1],
            'jenis_pajak' => $row[2],
            'nominal_pajak' => $row[3],
            'npwp' => $row[4],
            'nama_wp' => $row[5],
            'ntpn' => $row[6],
            'id_billing' => $row[7],
            'keperluan' => $row[8],
            'bulan' => $row[9],
            'triwulan' => $row[10]
        ]);
    }
}
