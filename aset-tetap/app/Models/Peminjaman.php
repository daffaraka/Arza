<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = "peminjaman";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','peminjam','tgl_pinjam','kode_barang', 'nama_barang','thn_perolehan',
        'cara_perolehan','jmlh_barang','harga','kondisi_barang','ket'
    ];
}
