<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\PesanKontak;
use App\Models\HeroSection; // <-- [TAMBAHAN] Import model HeroSection
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
    $hero = HeroSection::first(); 
    ($hero->toArray()); 

    return view('home', compact('hero'));
    }

    public function produk()
    {
        $produks = Produk::latest()->paginate(12);
        return view('produk', compact('produks'));
    }

    public function show($id)
    {
        // Mencari produk, jika tidak ada akan muncul error 404
        $produk = Produk::findOrFail($id);
        
        // Memastikan view-nya adalah produk_detail
        return view('produk_detail', compact('produk'));
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function kirimPesan(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);

        PesanKontak::create($request->all());

        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}