<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartuStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_stok', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_barang', 100);
            $table->string('unit_pemasukan', 100)->nullable();
            $table->string('harga_per_unit_pemasukan', 100)->nullable();
            $table->string('total_harga_pemasukan', 100)->nullable();
            $table->string('unit_pengeluaran', 100)->nullable();
            $table->string('harga_per_unit_pengeluaran', 100)->nullable();
            $table->string('total_harga_pengeluaran', 100)->nullable();
            $table->string('unit_persediaan', 100)->nullable();
            $table->string('harga_per_unit_persediaan', 100)->nullable();
            $table->string('total_harga_persediaan', 100)->nullable();
            $table->string('keterangan_1', 100);
            $table->string('keterangan_2', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartu_stok');
    }
}
