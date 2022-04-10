<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPDTriwulan extends Model
{
    protected $table = "spd_triwulan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','periode_tri','tahun','kode','nama','jan','feb','mar',
        'total_spd_berjalan','total_spj_berjalan','total_spd_saat_ini',
        'total_spj_saat_ini','nominal_blm_spj'
    ];
}
