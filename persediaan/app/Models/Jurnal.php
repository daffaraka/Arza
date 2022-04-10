<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = "jurnal";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','tanggal','transaksi','uraian','debit','kredit'
    ];
}
