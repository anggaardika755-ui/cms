<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel boleh tetap kapital atau kecil
    protected $table = 'PRODUK';
    
    // UBAH KE HURUF KECIL
    protected $primaryKey = 'id_produk'; 

    // UBAH KE HURUF KECIL
    protected $fillable = [
        'nama_produk',
        'jumlah_produk',
        'harga_jual',
        'kategori',
        'gambar'
    ];
}