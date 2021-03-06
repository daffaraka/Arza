<?php

namespace App\Imports;

use App\Models\NPWP;
use Maatwebsite\Excel\Concerns\ToModel;

class NPWPImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new NPWP([
            'npwp' => $row[3],
            'nama_wp' => $row[4],
        ]);
    }
}
