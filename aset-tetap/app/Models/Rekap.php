<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    protected $table = "rekap";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','kode', 'aset','jmlh','harga'
    ];
}
