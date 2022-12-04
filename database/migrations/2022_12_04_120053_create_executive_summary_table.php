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
        Schema::create('executive_summary', function (Blueprint $table) {
            $table->integer('id_exum');
            $table->integer('id_tugas_akhir');
            $table->text('latar_belakang');
            $table->text('penelitian_terdahulu');
            $table->text('rumusan_masalah');
            $table->text('metodologi');
            $table->text('referensi');
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
        Schema::dropIfExists('executive_summary');
    }
};
