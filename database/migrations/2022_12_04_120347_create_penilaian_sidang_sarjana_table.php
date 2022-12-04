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
        Schema::create('penilaian_sidang_sarjana', function (Blueprint $table) {
            $table->integer('id_sidang_sarjana');
            $table->string('nip', 18);
            $table->string('komponen_penilaian');
            $table->integer('nilai_angka');
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
        Schema::dropIfExists('penilaian_sidang_sarjana');
    }
};
