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
        Schema::create('status_tugas_akhir', function (Blueprint $table) {
            $table->integer('id_tugas_akhir');
            $table->integer('id_status');
            $table->string('keterangan');
            $table->enum('status',['Sedang Diproses', 'Berhasil', 'Gagal']);
            $table->string('comment');
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
        Schema::dropIfExists('status_tugas_akhir');
    }
};
