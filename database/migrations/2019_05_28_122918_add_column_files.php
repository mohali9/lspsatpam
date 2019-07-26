<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formulir', function (Blueprint $table) {
            $table->text('cv')->nullable();
            $table->text('ktp')->nullable();
            $table->text('ijazah')->nullable();
            $table->text('ijazah_satpam')->nullable();
            $table->text('kk')->nullable();
            $table->text('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formulir', function (Blueprint $table) {
            // Hendro seng ngerubah
            // $table->dropColumn('cv');
            // $table->dropColumn('ktp');
            // $table->dropColumn('ijazah');
            // $table->dropColumn('ijazah_satpam');
            // $table->dropColumn('kk');
            // $table->dropColumn('foto');
        });
    }
}
