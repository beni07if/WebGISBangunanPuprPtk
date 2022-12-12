<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUraianp1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uraianp1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uraian_pekerjaan1')->nullable();
            $table->timestamps();
        });

        Schema::table('uraianp1s', function (Blueprint $table) {
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
        Schema::dropIfExists('uraianp1s');
    }
}
