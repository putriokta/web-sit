<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('tempat_tanggal_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->string('keadaan_siswa');
            $table->string('agama');
            $table->string('golongan_darah');
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->integer('lingkar_kepala');
            $table->string('bahasa_sehari_hari');
            $table->integer('jarak_rumah');
            $table->string('tinggal_bersama');
            $table->foreignId('jenis_sekolah');
            $table->string('asal_sekolah');
            $table->string('alamat_sekolah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
