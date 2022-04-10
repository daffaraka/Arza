<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = "pengeluaran";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama_barang','sumber_dana','banyaknya','harga_satuan','jumlah_harga',
        'untuk','tanggal_penyerahan','keterangan'
    ];
}
