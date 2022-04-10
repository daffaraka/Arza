<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGUSPJSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guspj', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_input', 100);
            $table->string('triwulanke', 100);
            $table->year('tahun', 100);
            $table->string('kode', 100);
            $table->string('nama_kegiatan', 100);
            $table->string('spj_gu_ke', 100);
            $table->string('nominal', 100);
            $table->string('total', 100);
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
        Schema::dropIfExists('guspj');
    }
}
