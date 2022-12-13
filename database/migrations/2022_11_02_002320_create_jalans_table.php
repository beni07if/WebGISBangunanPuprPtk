<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jalans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor_ruas')->nullable();
            $table->string('nama_ruas')->nullable();
            $table->string('panjang')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('koordinat_pangkal')->nullable();
            $table->string('koordinat_ujung')->nullable();
            $table->string('kondisi_baik')->nullable();
            $table->string('kondisi_sedang')->nullable();
            $table->string('kondisi_rusak_ringan')->nullable();
            $table->string('kondisi_rusak_berat')->nullable();
            $table->string('jp_aspal')->nullable();
            $table->string('jp_beton')->nullable();
            $table->string('jp_kerikil')->nullable();
            $table->string('jp_tanah')->nullable();
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
        Schema::dropIfExists('jalans');
    }
}
