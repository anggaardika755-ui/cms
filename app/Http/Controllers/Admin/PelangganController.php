<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::latest()->get();
        return view('admin.pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_telepon'     => 'required|string|max:20',
            'alamat'         => 'required|string',
        ]);

        Pelanggan::create($request->all());

        // UBAH DISINI: Hapus 'admin.'
        return redirect()->route('admin.pelanggan.index')->with('success', 'Data pelanggan berhasil ditambahkan!');
    }

    public function show(Pelanggan $pelanggan)
    {
        // UBAH DISINI: Hapus 'admin.'
        return redirect()->route('admin.pelanggan.index');
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_telepon'     => 'required|string|max:20',
            'alamat'         => 'required|string',
        ]);

        $pelanggan->update($request->all());

        // UBAH DISINI: Hapus 'admin.'
        return redirect()->route('admin.pelanggan.index')->with('success', 'Data pelanggan berhasil diperbarui!');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();

        // UBAH DISINI: Hapus 'admin.'
        return redirect()->route('admin.pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus!');
    }
}