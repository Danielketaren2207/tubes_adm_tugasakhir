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
        Schema::create('komponen_penilaian_sempro', function (Blueprint $table) {
            $table->integer('id_sempro');
            $table->string('nip', 18);
            $table->string('komponen_penilaian');
            $table->enum('penilaian',['Terima', 'Perbaiki','Ganti']);
            $table->text('keterangan');
            $table->text('masukan_dan_saran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komponen_penilaian_sempro');
    }
};
