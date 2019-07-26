<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalTuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_tuks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('hari');
            $table->text('tanggal');
            $table->text('start_time');
            $table->text('end_time');
            $table->text('daftar_uji');
            $table->text('tuk');
            $table->text('user_id');
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
        Schema::dropIfExists('jadwal_tuks');
    }
}
