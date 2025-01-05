<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe_donasi',
        'nama_donatur',
        'info_kontak',
        'deskripsi',
        'jumlah',
        'nama_barang',
    ];
}