<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GUSPJ extends Model
{
    protected $table = "guspj";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','tgl_input', 'triwulanke','tahun','kode',
        'nama_kegiatan','spj_gu_ke','nominal','total'
    ];
}
