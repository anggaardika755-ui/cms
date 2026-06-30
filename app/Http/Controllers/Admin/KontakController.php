<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PesanKontak;

class KontakController extends Controller
{
    public function index()
    {
        $pesans = PesanKontak::latest()->paginate(10);

        return view('admin.kontak.index', compact('pesans'));
    }

    public function show($id)
    {
        $pesan = PesanKontak::findOrFail($id);

        return view('admin.kontak.show', compact('pesan'));
    }

    public function destroy($id)
    {
        $pesan = PesanKontak::findOrFail($id);
        $pesan->delete();

        return redirect()->route('admin.kontak.index')
            ->with('success', 'Pesan berhasil dihapus.');
    }
}