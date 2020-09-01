<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetilPengambilanBahanBakuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_pengambilan_bahan_baku', function (Blueprint $table) {
            $table->integer('KODE_PENGAMBILAN_BAHAN_BAKU', true);
            $table->integer('ID_PENERIMAAN')->index('FK_TERDAPAT999123');
            $table->integer('ID_OPERATOR_MESIN')->index('FK_MELAKUKAN912931');
            $table->integer('KODE_MESIN')->index('FK_TERDAPAT991');
            $table->dateTime('WAKTU_PENGAMBILAN');
            $table->float('JUMLAH_KG', 10, 0);
            $table->float('JUMLAH_SAK_KARUNG', 10, 0);
            $table->tinyInteger('STATUS_BAHAN_BAKU');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detil_pengambilan_bahan_baku');
    }
}