<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    protected $table = "penerimaan";
    protected $primaryKey = "id";
    protected $hidden = ["created_at", "updated_at"];

    protected $fillable = [
        'id','tanggal','dari','tanggal_faktur','nama_barang','sumber_dana',
        'banyaknya','harga_satuan','jumlah_harga','tanggal_penerimaan','keterangan'
    ];
}
