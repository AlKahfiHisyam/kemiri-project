<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->integer('ID_PENJUALAN', true);
            $table->integer('ID_MANAJER_MARKETING')->index('FK_KONFIRMASI');
            $table->integer('ID_KONFIRMASI_PENJUALAN')->index('FK_TERDAPAT1123');
            $table->integer('ID_SALES_B')->index('FK_MENGINPUTKAN');
            $table->dateTime('TGL_PENJUALAN');
            $table->date('TGL_KIIRM');
            $table->string('METODE_KIRIM', 50);
            $table->integer('TOTAL_PENJUALAN');
            $table->tinyInteger('STATUS_PENJUALAN');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}