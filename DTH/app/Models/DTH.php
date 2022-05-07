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
        'id',
        'kode_akun',
        'jenis_pajak',
        'nominal_pajak',
        'npwp',
        'nama_wp',
        'ntpn',
        'id_billing',
        'keperluan',
        'jumlah',
        'bulan',
        'triwulan'
    ];

    public function getSearchResult(): SearchResult
    {
        // $url = route('categories.show', $this->id);
        // $tanggal = $this->tanggal;
        // $nama_barang = $this->nama_barang;
        // $unit_pemasukkan = $this->unit_pemasukan;
        // $harga_per_unit_pemasukan = $this->harga_per_unit_pemasukan;
        // $total_harga_pemasukan = $this->total_harga_pemasukan;
        // $unit_pengeluaran = $this->unit_pengeluaran;
        // $harga_per_unit_pengeluaran = $this->harga_per_unit_pengeluaran;
        // $total_harga_pengelauran =  $this->total_harga_pengeluaran;
        // $unit_persedian = $this->unit_persediaan;
        // $harga_perunit_persediaan =  $this->harga_per_unit_persediaan;
        // $total_harga_persediaan = $this->total_harga_persediaan;
        // $keterangan_1 =  $this->keterangan_1;
        // $keterangan_2 = $this->keterangan_2;

        return new SearchResult(
            $this,
            $this->kode_akun,
            $this->jenis_pajak,
            $this->nominal_pajak,
            $this->npwp,
            $this->nama_wp,
            $this->ntpn,
            $this->id_billing,
            $this->keperluan,
            $this->bulan,
            $this->triwulan,
            // $url
         );
    }
}
