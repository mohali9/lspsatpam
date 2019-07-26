<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulir', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('NIK');
            $table->string('nama_depan', 50);
            $table->string('nama_belakang', 50);
            $table->string('gender', 1);
            $table->text('alamat');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('tinggi');
            $table->string('berat');
            $table->string('pendidikan_terakhir', 10);
            $table->string('no_hp', 15);
            $table->string('email', 62);
            $table->string('password', 62);
            $table->string('flag', 2);
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
        Schema::dropIfExists('Formulir');
    }
}
