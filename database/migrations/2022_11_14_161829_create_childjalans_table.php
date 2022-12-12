<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildjalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('childjalans', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('patok_dari')->nullable();
        //     $table->string('patok_ke')->nullable();
        //     $table->string('panjang')->nullable();
        //     $table->string('lebar')->nullable();
        //     $table->string('kondisi_jalan')->nullable();
        //     $table->string('panjang_total')->nullable();
        //     $table->timestamps();
        // });

        // Schema::table('childjalans', function (Blueprint $table) {
        //     $table->foreignId('parentjalan_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('childjalans');
    }
}
