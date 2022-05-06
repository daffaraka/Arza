<?php

namespace App\Exports;

use App\Models\DTH;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DTHExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DTH::all();
    }

    public function headings(): array
    {
        return  [
            '#','Kode Akun', 'jenis_pajak','nominal_pajak','npwp','nama_wp',
            'ntpn','id_billing','keperluan','jumlah','bulan','triwulan'
        ];
    }
}
