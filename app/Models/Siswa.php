<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'tempat_tanggal_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'anak_ke',
        'jumlah_saudara',
        'keadaan_siswa',
        'agama',
        'golongan_darah',
        'berat_badan',
        'tinggi_badan',
        'lingkar_kepala',
        'bahasa_sehari_hari',
        'jarak_rumah',
        'tinggal_bersama',
        'asal_sekolah',
        'alamat_sekolah',
        'jenis_sekolah'
    ];

    public function JenisSekolah(){
        return $this->belongsTo(JenisSekolah::class);
    }
}
