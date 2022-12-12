<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableOo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('uraianp1s', function (Blueprint $table) {
            $table->string('uraian_pekerjaan2')->nullable()->after('uraian_pekerjaan1');
            $table->string('tsb')->nullable()->after('uraian_pekerjaan1');
            $table->string('bobot_maksimum')->nullable()->after('uraian_pekerjaan1');
            $table->string('bobot')->nullable()->after('uraian_pekerjaan1');
            $table->string('nilai')->nullable()->after('uraian_pekerjaan1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uraianp1s', function (Blueprint $table) {
            //
        });
    }
}
