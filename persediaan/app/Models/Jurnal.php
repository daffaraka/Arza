<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = "jurnal";
    protected $primaryKey = "id";
    protected $hidden = ["created_at", "updated_at"];

    protected $fillable = [
        'id','tanggal','transaksi','uraian_debit','uraian_kredit','debit','kredit'
    ];
}
