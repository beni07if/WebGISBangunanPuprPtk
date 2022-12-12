<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailbangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailbangunans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_bangunan')->nullable();
            $table->string('tahun_dibangun')->nullable();
            $table->string('jumlah_tingkat')->nullable();
            $table->string('ttlb')->nullable();
            $table->string('llb')->nullable();
            $table->string('klb')->nullable();
            $table->string('fbr')->nullable();
            $table->string('klasifikasi_bangunan')->nullable();
            $table->string('lembaga')->nullable();
            $table->string('pemakai')->nullable();
            $table->string('alamat')->nullable();
            $table->text('dasar_analisis1')->nullable();
            $table->text('dasar_analisis2')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('kerusakan')->nullable();
            $table->string('jenis_tk')->nullable();
            $table->string('jenis_perawatan')->nullable();
            $table->string('kerusakan_ringan')->nullable();
            $table->string('kerusakan_sedang')->nullable();
            $table->string('kerusakan_berat')->nullable();
            $table->string('kerusakan_khusus')->nullable();
            $table->timestamps();
        });

        Schema::table('detailbangunans', function (Blueprint $table) {
            $table->foreignId('bangunan2_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailbangunans');
    }
}
