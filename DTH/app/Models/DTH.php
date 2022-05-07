<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class DTH extends Model implements Searchable
{
    protected $table = "dth";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','kode_akun', 'jenis_pajak','nominal_pajak','npwp','nama_wp',
        'ntpn','id_billing','keperluan','jumlah','bulan','triwulan'
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('categories.show', $this->id);

        return new SearchResult(
            $this,
            $this->tanggal,
            $this->nama_barang,
            $this->unit_pemasukan,
            $this->harga_per_unit_pemasukan,
            $this->total_harga_pemasukan,
            $this->unit_pengeluaran,
            $this->harga_per_unit_pengeluaran,
            $this->total_harga_pengeluaran,
            $this->unit_persediaan,
            $this->harga_perunit_persediaan,
            $this->keterangan_1,
            $this->total_harga_persediaan,
            $this->keterangan_2,
            $url
         );
    }
}
