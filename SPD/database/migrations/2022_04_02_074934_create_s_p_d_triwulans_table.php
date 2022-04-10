<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSPDTriwulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spd_triwulan', function (Blueprint $table) {
            $table->id();
            $table->string('periode_tri', 100);
            $table->year('tahun', 100);
            $table->string('kode', 100);
            $table->string('nama', 100);
            $table->string('jan', 100);
            $table->string('feb', 100);
            $table->string('mar', 100);
            $table->string('total_spd_berjalan', 100);
            $table->string('total_spj_berjalan', 100);
            $table->string('total_spd_saat_ini', 100);
            $table->string('total_spj_saat_ini', 100);
            $table->string('nominal_blm_spj', 100);
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
        Schema::dropIfExists('spd_triwulan');
    }
}
