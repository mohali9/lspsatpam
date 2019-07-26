<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkemapendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skemapendaftarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->text('gambar');
            $table->text('info');
            $table->text('skema');
            $table->text('biaya');
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
        Schema::dropIfExists('skemapendaftarans');
    }
}
