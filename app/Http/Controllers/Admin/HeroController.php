<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function edit()
    {
        // Otomatis bikin 1 baris data default jika tabel di Oracle masih kosong
        $hero = HeroSection::firstOrCreate(
            ['id' => 1],
            [
                'title' => 'Solusi Lengkap Kebutuhan Material Bangunan Anda',
                'subtitle' => 'Menyediakan berbagai material bangunan berkualitas dengan harga kompetitif untuk proyek rumah, gedung, dan konstruksi.',
                'button_text_1' => 'Lihat Produk',
                'button_text_2' => 'Hubungi Kami',
            ]
        );

        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request)
    {
        // Pakai first() agar kebal terhadap nomor ID sequence Oracle yang suka lompat
        $hero = HeroSection::first(); 

        $data = $request->validate([
            'title'         => 'required|string|max:255',
            'subtitle'      => 'required|string',
            'button_text_1' => 'required|string|max:50',
            'button_text_2' => 'required|string|max:50',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($hero->image_path && Storage::disk('public')->exists($hero->image_path)) {
                Storage::disk('public')->delete($hero->image_path);
            }
            $data['image_path'] = $request->file('image')->store('hero', 'public');
        }

        $hero->update($data);

        return back()->with('success', 'Tampilan Banner Depan Berhasil Diperbarui!');
    }
}