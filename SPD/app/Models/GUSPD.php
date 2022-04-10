<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GUSPD extends Model
{
    protected $table = "guspd";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','tgl_input', 'periode_triwulan','tahun','kode_rek',
        'nama_kegiatan','bulan1','nominal_bulan1','bulan2',
        'nominal_bulan2','bulan3','nominal_bulan3','jumlah_spd'
    ];
}
