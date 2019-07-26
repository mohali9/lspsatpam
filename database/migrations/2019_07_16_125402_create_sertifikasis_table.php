<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSertifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jadwal_tuks_id')->usigned(); //foreignkey ambil relasi tabel lain
            $table->integer('user_id')->unsigned();
            $table->integer('pembayaran_id')->unsigned();
            $table->string('status')->nullable(); //diisi/tdk gpp
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
        Schema::dropIfExists('sertifikasis');
    }
}
