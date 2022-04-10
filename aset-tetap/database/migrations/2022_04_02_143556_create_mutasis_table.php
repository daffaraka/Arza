<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang', 100);
            $table->string('register', 100);
            $table->string('nama', 100);
            $table->string('merk', 100);
            $table->string('bahan', 100);
            $table->string('cara_perolehan', 100);
            $table->string('ukuran_barang', 100);
            $table->string('satuan', 100);
            $table->string('kondisi', 100);
            $table->string('barang', 100);
            $table->string('harga', 100);
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
        Schema::dropIfExists('mutasi');
    }
}
