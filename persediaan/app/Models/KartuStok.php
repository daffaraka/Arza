<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuStok extends Model
{
    protected $table = "kartu_stok";
    protected $primaryKey = "id";
    protected $hidden = ["created_at", "updated_at"];

    protected $fillable = [
        'id','tanggal','nama_barang','unit_pemasukan', 'harga_per_unit_pemasukan','total_harga_pemasukan',
        'unit_pengeluaran', 'harga_per_unit_pengeluaran','total_harga_pengeluaran',
        'unit_persediaan', 'harga_per_unit_persediaan','total_harga_persediaan','keterangan'
    ];
}
