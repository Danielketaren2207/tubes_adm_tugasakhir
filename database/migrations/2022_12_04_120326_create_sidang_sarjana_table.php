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
        Schema::create('sidang_sarjana', function (Blueprint $table) {
            $table->integer('id_tugas_akhir');
            $table->integer('id_sidang_sarjana');
            $table->dateTime('hari_tanggal_waktu');
            $table->string('lokasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sidang_sarjana');
    }
};
