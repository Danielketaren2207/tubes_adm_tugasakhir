<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_validasi_akun', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('password');
            $table->string('foto');
            $table->datetime('waktu_pengajuan');
            $table->string('aksi');
            $table->enum('status',['Dalam proses','Ditolak','Diterima']);
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_validasi_akun');
    }
};
