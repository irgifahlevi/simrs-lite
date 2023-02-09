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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('poliklinik_id');
            $table->unsignedBigInteger('pasien_id')->nullable();
            $table->enum('kategori', ['Lama', 'Baru']);
            $table->date('tanggal_pendaftaran');
            $table->string('antrian');
            $table->timestamps();


            $table->foreign('poliklinik_id')->references('id')->on('poli_kliniks')->onDelete('cascade');
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
};
