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
        Schema::create('validasi_pemberkasan', function (Blueprint $table) {
            $table->integer('id_tugas_akhir');
            $table->enum('jenis_validasi',['Seminar Proposal', 'Seminar Hasil', 'Sidang Meja Hijau', 'Penggandaan Skripsi']);
            $table->enum('berkas',['KRS/KHS','Lunas SPP','Lembar Kendali Pra-Sempro','SK Dosen Pembimbing Skripsi','Lembar Kendali Pra-Semhas','Buku Bimbingan Skripsi','KKM','Lembar Kendali Pra-Sidang','Draf Jurnal','CD+SC+jurnal','Form Penggandaan Skripsi','Bebas Pustaka USU']);
            $table->dateTime('waktu_validasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validasi_pemberkasan');
    }
};
