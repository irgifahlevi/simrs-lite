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
            $table->unsignedBigInteger('pasien_id');
            $table->enum('kategori', ['Lama', 'Baru']);
            $table->dateTime('tanggal_pendaftaran');
            $table->integer('antrian');
            $table->string('diagnosa', 200);
            $table->enum('status_poli', ['Sudah', 'Belum']);
            $table->unsignedBigInteger('dokter_id');
            $table->timestamps();


            $table->foreign('poliklinik_id')->references('id')->on('poli_kliniks')->onDelete('cascade');
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');
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
