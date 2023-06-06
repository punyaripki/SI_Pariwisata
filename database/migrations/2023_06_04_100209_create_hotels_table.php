<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->string('id_hotel');
            $table->string('id_penilaian');
            $table->string('id_jenishotel');
            $table->string('nama_hotel');
            $table->string('alamat_hotel');
            $table->string('no_hp');
            $table->string('banyak_kamar');
            $table->string('no_kamar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
};
