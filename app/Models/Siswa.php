<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable =[
        'name',
        'nik',
        'alamat',
        'nama_ibu',
        'nama_ayah',
        'file_kk',
        'file_akte_kelahiran',
        'file_pas_foto'
    ];
}
