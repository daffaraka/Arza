<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = "daftar";
    protected $primaryKey = "id";
    protected $hidden = ["created_at", "updated_at"];
    protected $fillable = [
        'id','kode_barang','register','nama', 'merk','tahun',
        'harga_beli','umur_ekonomis','biaya_peny','jmlh_barang',
        'kondisi','ket'
    ];
}
