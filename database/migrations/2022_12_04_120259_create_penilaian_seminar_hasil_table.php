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
        Schema::create('penilaian_seminar_hasil', function (Blueprint $table) {
            $table->integer('id_seminar_hasil');
            $table->string('nip', 18);
            $table->string('komponen_penilaian');
            $table->integer('nilai_angka');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian_seminar_hasil');
    }
};
