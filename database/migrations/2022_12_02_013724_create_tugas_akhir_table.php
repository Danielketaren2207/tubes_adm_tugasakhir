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
        Schema::create('tugas_akhir', function (Blueprint $table) {
            $table->integer('id_tugas_akhir');
            $table->string('nim',9);
            $table->string('judul_skripsi');
            $table->string('bidang_ilmu');
            $table->string('diajukan_oleh');
            $table->enum('kelayakan_judul',['Diterima', 'Ditolak']);
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
        Schema::dropIfExists('tugas_akhir');
    }
};
