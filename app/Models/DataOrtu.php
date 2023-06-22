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
        'nama_wali',
        'ttl_a',
        'ttl_i',
        'ttl_w',
        'tl_a',
        'tl_i',
        'tl_w',
        'agama_a',
        'agama_i',
        'agama_w',
        'alamat_a',
        'alamat_i',
        'alamat_w',
        'no_hp_a',
        'no_hp_i',
        'no_hp_w',
        'pen_a',
        'pen_i',
        'pen_w',
        'jurusan_a',
        'jurusan_i',
        'jurusan_w',
        'email_a',
        'email_i',
        'email_w',
        'hubungan_a',
        'hubungan_i',
        'hubungan_w',
        'pekerjaan_a',
        'pekerjaan_i',
        'pekerjaan_w',
        'nama_perusahaan_a',
        'nama_perusahaan_i',
        'nama_perusahaan_w',
        'bidang_perusahaan_a',
        'bidang_perusahaan_i',
        'bidang_perusahaan_w',
        'alamat_kantor_a',
        'alamat_kantor_i',
        'alamat_kantor_w',
        'penghasilan_perbulan_a',
        'penghasilan_perbulan_i',
        'penghasilan_perbulan_w',
    ];
}
