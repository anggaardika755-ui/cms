@extends('layouts.admin')

@section('title', 'Edit Produk')
@section('header', 'Ubah Data Produk')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-[#e0e3e5] max-w-2xl overflow-hidden">
    <div class="p-6 border-b border-[#e0e3e5] flex items-center justify-between">
        <h2 class="text-base font-semibold text-gray-700">Ubah Detil #{{ $produk->id_produk }}</h2>
        <a href="{{ route('admin.produk.index') }}" class="text-sm text-gray-500 hover:text-[#1e3a8a] flex items-center gap-1 transition-colors">
            <span class="material-symbols-outlined text-base">arrow_back</span> Batal
        </a>
    </div>
    
    <form action="{{ route('admin.produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-5">
        @csrf
        @method('PUT')
        
        @if ($errors->any())
            <div class="bg-red-50 text-red-600 p-4 rounded-lg text-sm border border-red-200">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Material / Produk</label>
            <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="w-full p-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
            <select name="kategori" class="w-full p-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none bg-white" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Semen" {{ $produk->kategori == 'Semen' ? 'selected' : '' }}>Semen</option>
                <option value="Besi dan Baja" {{ $produk->kategori == 'Besi dan Baja' ? 'selected' : '' }}>Besi dan Baja</option>
                <option value="Bata dan Batako" {{ $produk->kategori == 'Bata dan Batako' ? 'selected' : '' }}>Bata dan Batako</option>
                <option value="Pipa dan Plumbing" {{ $produk->kategori == 'Pipa dan Plumbing' ? 'selected' : '' }}>Pipa dan Plumbing</option>
                <option value="Peralatan Bangunan" {{ $produk->kategori == 'Peralatan Bangunan' ? 'selected' : '' }}>Peralatan Bangunan</option>
                <option value="Cat Bangunan" {{ $produk->kategori == 'Cat Bangunan' ? 'selected' : '' }}>Cat Bangunan</option>
                <option value="Atap dan Genteng" {{ $produk->kategori == 'Atap dan Genteng' ? 'selected' : '' }}>Atap dan Genteng</option>
            </select>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Harga Jual (Rp)</label>
                <input type="number" name="harga_jual" value="{{ $produk->harga_jual }}" class="w-full p-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jumlah Stok</label>
                <input type="number" name="jumlah_produk" value="{{ $produk->jumlah_produk }}" class="w-full p-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none" required>
            </div>
        </div>

        <div class="bg-gray-50 p-4 border border-gray-200 rounded-lg">
            <label class="block text-sm font-medium text-gray-700 mb-2">Ganti Foto Produk (Opsional)</label>
            
            @if($produk->gambar)
                <div class="mb-3 flex items-center gap-3">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Preview" class="w-16 h-16 object-cover rounded border border-gray-300">
                    <span class="text-xs text-gray-500">Gambar saat ini</span>
                </div>
            @endif

            <input type="file" name="gambar" accept="image/*" class="w-full text-sm bg-white border border-gray-300 rounded-lg file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-[#1e3a8a] file:text-white hover:file:bg-opacity-90 cursor-pointer">
            <p class="text-xs text-gray-500 mt-2">Biarkan kosong jika tidak ingin mengganti gambar.</p>
        </div>

        <div class="pt-4 border-t border-gray-100 flex justify-end gap-2">
            <button type="submit" class="bg-orange-500 text-white px-6 py-2.5 rounded-lg text-sm font-medium hover:bg-orange-600 shadow-md transition-all active:scale-95 flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">save_as</span> Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection