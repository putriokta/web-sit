<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrtu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ayah',
        'nama_ibu',
        'ttl_a',
        'ttl_i',
        'tl_a',
        'tl_i',
        'agama_a',
        'agama_i',
        'alamat_a',
        'alamat_i',
        'no_hp_a',
        'no_hp_i',
        'pend_a',
        'pend_i',
        'jurusan_a',
        'jurusan_i',
        'email_a',
        'email_i',
        'hubungan_a',
        'hubungan_i',
        'pekerjaan_a',
        'pekerjaan_i',
        'nama_perusahaan_a',
        'nama_perusahaan_i',
        'bidang_perusahaan_a',
        'bidang_perusahaan_i',
        'alamat_kantor_a',
        'alamat_kantor_i',
        'penghasilan_perbulan_a',
        'penghasilan_perbulan_i',
    ];
}
