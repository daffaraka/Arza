<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarBarang extends Model
{
    protected $table = "daftar_barang";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama_barang', 'jenis_barang'
    ];
    
}
