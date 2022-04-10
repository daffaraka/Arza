<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    protected $table = "target";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','tgl_input', 'triwulanke','tahun','kode',
        'nama','nominal_spd_berlalu','nominal_spd_berjalan','total_spd',
        'nominal_spj_berlalu','nominal_spj_berjalan','total_spj','nominal_belum_spj'
    ];
}
