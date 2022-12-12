<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtjpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('ptjps', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->integer('jp_aspal')->nullable();
        //     $table->integer('jp_beton')->nullable();
        //     $table->integer('jp_kerikil')->nullable();
        //     $table->integer('jp_tanah')->nullable();
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
        Schema::dropIfExists('ptjps');
    }
}
