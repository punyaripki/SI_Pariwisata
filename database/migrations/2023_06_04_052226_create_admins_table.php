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
        Schema::create('admins', function (Blueprint $table) {
            $table->string('id_admin');
            $table->string('id_pemesanan');
            $table->string('id_pegawai');
            $table->string('id_penilaian');
            $table->string('id_wisata');
        
            $table->string('nama_admin');
            $table->string('email_admin');
            $table->string('password_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
