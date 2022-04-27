<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTH extends Model
{
    protected $table = "dth";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kode_akun', 'jenis_pajak','nominal_pajak','npwp','nama_wp',
        'ntpn','id_billing','keperluan','jumlah','bulan','triwulan'
    ];
}
