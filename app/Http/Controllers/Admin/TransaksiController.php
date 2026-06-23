<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Pelanggan; // Pastikan model Pelanggan di-import
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        // Menggunakan with('pelanggan') untuk menghindari N+1 query problem
        $transaksis = Transaksi::with('pelanggan')->latest('tanggal_pembayaran')->paginate(10);
        return view('admin.transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        // Ambil data pelanggan untuk dropdown pilihan
        $pelanggans = Pelanggan::all();
        return view('admin.transaksi.create', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pelanggan' => 'required|exists:pelanggan,id_pelanggan',
            'tanggal_pembayaran' => 'required|date',
            'total_pembayaran' => 'required|integer|min:0',
        ]);

        Transaksi::create($validated);
        return redirect()->route('admin.transaksi.index')
                         ->with('success', 'Transaksi pembayaran berhasil ditambahkan.');
    }

    public function edit(Transaksi $transaksi)
    {
        $pelanggans = Pelanggan::all();
        return view('admin.transaksi.edit', compact('transaksi', 'pelanggans'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        $validated = $request->validate([
            'id_pelanggan' => 'required|exists:pelanggan,id_pelanggan',
            'tanggal_pembayaran' => 'required|date',
            'total_pembayaran' => 'required|integer|min:0',
        ]);

        $transaksi->update($validated);
        return redirect()->route('admin.transaksi.index')
                         ->with('success', 'Data transaksi berhasil diperbarui.');
    }

    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('admin.transaksi.index')
                         ->with('success', 'Transaksi berhasil dihapus.');
    }
}