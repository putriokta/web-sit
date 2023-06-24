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
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->text('ktp');
            $table->text('akta');
            $table->text('kk');
            $table->text('foto');
            $table->text('rapot_semester_akhir')->nullable();
            $table->text('surat_lulus')->nullable();
            $table->text('surat_minat_bakat')->nullable();
            $table->text('surat_sehat');
            $table->text('buku_nikah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
