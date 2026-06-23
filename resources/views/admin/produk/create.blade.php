@extends('layouts.admin')

@section('title', 'Tambah Produk')
@section('header', 'Tambah Produk Baru')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-[#e0e3e5] max-w-2xl overflow-hidden">
    <div class="p-6 border-b border-[#e0e3e5] flex items-center justify-between">
        <h2 class="text-base font-semibold text-gray-700">Formulir Input Inventaris</h2>
        <a href="{{ route('admin.produk.index') }}" class="text-sm text-gray-500 hover:text-[#1e3a8a] flex items-center gap-1 transition-colors">
            <span class="material-symbols-outlined text-base">arrow_back</span> Kembali
        </a>
    </div>
    
    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-5">
        @csrf
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Material / Produk</label>
            <input type="text" name="nama_produk" placeholder="Contoh: Semen Gresik PPC 40kg" class="w-full p-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none transition-all" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
            <select name="kategori" class="w-full p-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none bg-white transition-all" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Semen">Semen</option>
                <option value="Besi dan Baja">Besi dan Baja</option>
                <option value="Bata dan Batako">Bata dan Batako</option>
                <option value="Pipa dan Plumbing">Pipa dan Plumbing</option>
                <option value="Peralatan Bangunan">Peralatan Bangunan</option>
                <option value="Cat Bangunan">Cat Bangunan</option>
                <option value="Atap dan Genteng">Atap dan Genteng</option>
            </select>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Harga Jual (Rp)</label>
                <input type="number" name="harga_jual" placeholder="Contoh: 65000" class="w-full p-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none transition-all" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah Stok Awal</label>
                <input type="number" name="jumlah_produk" placeholder="Contoh: 50" class="w-full p-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none transition-all" required>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Foto Produk</label>
            <input type="file" name="gambar" accept="image/*" class="w-full p-2 border border-gray-300 rounded-lg text-sm bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-[#1e3a8a] file:text-white hover:file:bg-opacity-90 file:cursor-pointer cursor-pointer transition-all">
            <p class="text-xs text-gray-500 mt-1">Format dokumen: JPG, JPEG, atau PNG. Maksimal ukuran file 2MB.</p>
        </div>

        <div class="pt-4 border-t border-gray-100 flex justify-end">
            <button type="submit" class="w-full sm:w-auto bg-[#1e3a8a] text-white px-6 py-2.5 rounded-lg text-sm font-medium hover:bg-opacity-90 shadow-md transition-all active:scale-95 flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-lg">save</span> Simpan Produk ke Database
            </button>
        </div>
    </form>
</div>
@endsection