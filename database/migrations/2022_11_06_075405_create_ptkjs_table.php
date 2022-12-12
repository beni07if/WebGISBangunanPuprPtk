<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtkjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('ptkjs', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->float('kondisi_baik')->nullable();
        //     $table->float('kondisi_sedang')->nullable();
        //     $table->float('kondisi_rusak_ringan')->nullable();
        //     $table->float('kondisi_rusak_berat')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ptkjs');
    }
}
