<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nomer',
        'jumlah',
        'jenis_sablon',
        'jenis_kain',
        'harga',
        'deskripsi',
        'tanggal_pesanan',
        'deadline_pesanan',
    ];
}
