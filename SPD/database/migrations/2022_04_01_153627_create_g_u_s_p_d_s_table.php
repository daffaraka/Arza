<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGUSPDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guspd', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_input', 100);
            $table->string('periode_triwulan', 100);
            $table->year('tahun', 100);
            $table->string('kode_rek', 100);
            $table->string('nama_kegiatan', 100);
            $table->string('bulan1', 100);
            $table->string('nominal_bulan1', 100);
            $table->string('bulan2', 100);
            $table->string('nominal_bulan2', 100);
            $table->string('bulan3', 100);
            $table->string('nominal_bulan3', 100);
            $table->string('jumlah_spd', 100);
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
        Schema::dropIfExists('guspd');
    }
}
