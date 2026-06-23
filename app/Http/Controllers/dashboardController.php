<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // 1. Data Statistik
        $totalProduk = Produk::count();
        $stokMenipis = Produk::where('jumlah_produk', '<=', 5)
                            ->where('jumlah_produk', '>', 0)
                            ->count();
        $stokHabis = Produk::where('jumlah_produk', '=', 0)->count();
        $totalKategori = Produk::distinct()->count('kategori');
        
        // 2. Data untuk tabel
        $produkKritis = Produk::where('jumlah_produk', '<=', 5)
                             ->orderBy('jumlah_produk', 'asc')
                             ->limit(5)
                             ->get();

        // 3. Pastikan path 'admin.dashboard.index' merujuk pada resources/views/admin/dashboard/index.blade.php
        return view('admin.dashboard.index', compact(
            'totalProduk', 
            'stokMenipis', 
            'stokHabis', 
            'totalKategori', 
            'produkKritis'
        ));
    }
}