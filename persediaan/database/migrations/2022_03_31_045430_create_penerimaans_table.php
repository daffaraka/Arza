<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->string('dari', 100);
            $table->string('tanggal_faktur');
            $table->string('nama_barang');
            $table->string('sumber_dana', 100);
            $table->string('banyaknya', 100);
            $table->string('harga_satuan', 100);
            $table->string('jumlah_harga', 100);
            $table->string('tanggal_penerimaan');
            $table->string('keterangan', 100);
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
        Schema::dropIfExists('penerimaan');
    }
}
