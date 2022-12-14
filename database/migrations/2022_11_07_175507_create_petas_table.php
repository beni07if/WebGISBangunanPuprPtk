<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_peta')->nullable();
            $table->string('psjj')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('peta')->nullable();
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
        Schema::dropIfExists('petas');
    }
}
