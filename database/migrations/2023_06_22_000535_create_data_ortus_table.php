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
        Schema::create('data_ortus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_wali');
            $table->string('ttl_a');
            $table->string('ttl_i');
            $table->string('ttl_w');
            $table->date('tl_a');
            $table->date('tl_i');
            $table->date('tl_w');
            $table->string('agama_a');
            $table->string('agama_i');
            $table->string('agama_w');
            $table->string('alamat_a');
            $table->string('alamat_i');
            $table->string('alamat_w');
            $table->integer('no_hp_a');
            $table->integer('no_hp_i');
            $table->integer('no_hp_w');
            $table->string('pend_a');
            $table->string('pend_i');
            $table->string('pend_w');
            $table->string('jurusan_a');
            $table->string('jurusan_i');
            $table->string('jurusan_w');
            $table->string('email_a');
            $table->string('email_i');
            $table->string('email_w');
            $table->string('hubungan_a');
            $table->string('hubungan_i');
            $table->string('hubungan_w');
            $table->string('pekerjaan_a');
            $table->string('pekerjaan_i');
            $table->string('pekerjaan_w');
            $table->string('nama_perusahaan_a');
            $table->string('nama_perusahaan_i');
            $table->string('nama_perusahaan_w');
            $table->string('bidang_perusahaan_a');
            $table->string('bidang_perusahaan_i');
            $table->string('bidang_perusahaan_w');
            $table->string('alamat_kantor_a');
            $table->string('alamat_kantor_i');
            $table->string('alamat_kantor_w');
            $table->string('penghasilan_perbulan_a');
            $table->string('penghasilan_perbulan_i');
            $table->string('penghasilan_perbulan_w');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ortus');
    }
};
