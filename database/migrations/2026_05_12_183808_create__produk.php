<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Nama tabel dikunci jadi 'produk' (Tanpa huruf S)
        Schema::create('produk', function (Blueprint $table) {
            
            // 2. Primary Key dikunci jadi 'id_produk' (Bukan 'id')
            $table->bigIncrements('id_produk'); 

            $table->string('nama_produk');
            $table->string('kategori')->default('Material');
            
            // 3. Nama kolom disamakan dengan Controller Anda: harga_jual & jumlah_produk
            $table->integer('harga_jual'); 
            $table->integer('jumlah_produk'); 
            
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable(); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};