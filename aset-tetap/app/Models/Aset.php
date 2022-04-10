<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    protected $table = "aset";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kode_barang','nama_barang', 'jumlah','harga'
    ];
}
