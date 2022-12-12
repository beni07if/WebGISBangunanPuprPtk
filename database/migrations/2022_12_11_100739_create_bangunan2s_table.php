<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangunan2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangunan2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bangunan2')->nullable();
            $table->string('tingkat_kerusakan')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });

        Schema::table('bangunan2s', function (Blueprint $table) {
            $table->foreignId('bangunan_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bangunan2s');
    }
}
