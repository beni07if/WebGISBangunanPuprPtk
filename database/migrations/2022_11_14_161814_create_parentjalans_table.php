<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentjalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('parentjalans', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('provinsi');
        //     $table->string('nomor_ruas')->unique();
        //     $table->string('nama_ruas');
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
        Schema::dropIfExists('parentjalans');
    }
}
