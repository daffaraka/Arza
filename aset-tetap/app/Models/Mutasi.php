<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $table = "mutasi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kode_barang','register','nama', 'merk','bahan',
        'cara_perolehan','ukuran_barang','satuan','kondisi',
        'barang','harga'
    ];
}
