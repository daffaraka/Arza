<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang', 100);
            $table->string('register', 100);
            $table->string('nama', 100);
            $table->string('merk', 100);
            $table->year('tahun', 100);
            $table->string('harga_beli', 100);
            $table->string('umur_ekonomis', 100);
            $table->string('biaya_peny', 100);
            $table->string('jmlh_barang', 100);
            $table->string('kondisi', 100);
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
        Schema::dropIfExists('daftar');
    }
}
