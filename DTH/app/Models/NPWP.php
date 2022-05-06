<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NPWP extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = 'n_p_w_p_s';

    protected $fillable = [
        'npwp',
        'nama_wp'
    ];
}
