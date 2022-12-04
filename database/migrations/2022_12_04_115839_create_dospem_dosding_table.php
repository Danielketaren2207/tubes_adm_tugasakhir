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
        Schema::create('dospem_dosding', function (Blueprint $table) {
            $table->integer('id_tugas_akhir');
            $table->string('nip',18);
            $table->enum('tugas_ke_mahasiswa',['Dosen Pembimbing', 'Dosen Pembanding']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dospem_dosding');
    }
};
