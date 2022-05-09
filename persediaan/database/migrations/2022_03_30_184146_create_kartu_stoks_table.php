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
            $table->integer('unit_pemasukan')->nullable();
            $table->integer('harga_per_unit_pemasukan')->nullable();
            $table->integer('total_harga_pemasukan')->nullable();
            $table->integer('unit_pengeluaran')->nullable();
            $table->integer('harga_per_unit_pengeluaran')->nullable();
            $table->integer('total_harga_pengeluaran')->nullable();
            $table->integer('unit_persediaan')->nullable();
            $table->integer('harga_per_unit_persediaan')->nullable();
            $table->integer('total_harga_persediaan')->nullable();
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
