<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_input', 100);
            $table->string('triwulanke', 100);
            $table->year('tahun', 100);
            $table->string('kode', 100);
            $table->string('nama', 100);
            $table->string('nominal_spd_berlalu', 100);
            $table->string('nominal_spd_berjalan', 100);
            $table->string('total_spd', 100);
            $table->string('nominal_spj_berlalu', 100);
            $table->string('nominal_spj_berjalan', 100);
            $table->string('total_spj', 100);
            $table->string('nominal_belum_spj', 100);
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
        Schema::dropIfExists('target');
    }
}
