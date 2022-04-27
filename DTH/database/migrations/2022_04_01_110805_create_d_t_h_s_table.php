<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDTHSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dth', function (Blueprint $table) {
            $table->id();
            $table->string('kode_akun', 100);
            $table->string('jenis_pajak', 100);
            $table->string('nominal_pajak', 100);
            $table->string('npwp', 100);
            $table->string('nama_wp', 100);
            $table->string('ntpn', 100);
            $table->string('id_billing', 100);
            $table->string('keperluan', 100);
            $table->string('bulan',100);
            $table->string('triwulan',100);
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
        Schema::dropIfExists('dth');
    }
}
