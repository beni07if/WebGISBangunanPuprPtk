<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUraianp2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uraianp2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uraian_pekerjaan2')->nullable();
            $table->string('tsb')->nullable();
            $table->string('bobot_maksimum')->nullable();
            $table->string('bobot')->nullable();
            $table->string('nilai')->nullable();
            $table->timestamps();
        });

        Schema::table('uraianp2s', function (Blueprint $table) {
            $table->foreignId('uraianp1_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uraianp2s');
    }
}
