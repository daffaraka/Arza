<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('peminjam', 100);
            $table->date('tgl_pinjam', 100);
            $table->string('kode_barang', 100);
            $table->string('nama_barang', 100);
            $table->string('thn_perolehan', 100);
            $table->string('cara_perolehan', 100);
            $table->string('jmlh_barang', 100);
            $table->string('harga', 100);
            $table->string('kondisi_barang', 100);
            $table->string('ket', 100);
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
        Schema::dropIfExists('peminjaman');
    }
}
