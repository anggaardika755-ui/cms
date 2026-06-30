@extends('layouts.admin')

@section('title', 'Daftar Katalog Material')
@section('header', 'Pusat Kendali Katalog Produk')

@section('content')

<div class="space-y-6">

    <!-- ================= 1. ACTION & SEARCH BAR (Kesan Software Enterprise) ================= -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] flex flex-col lg:flex-row justify-between lg:items-center gap-6">
        
        <div class="space-y-1">
            <h2 class="text-xl sm:text-2xl font-black text-[#183059] tracking-tight">Data Barang Gudang</h2>
            <p class="text-xs sm:text-sm text-slate-400">Total <strong class="text-slate-700">{{ $produks->total() ?? 0 }} SKU</strong> material tercatat aktif di Oracle.</p>
        </div>

        <div class="flex flex-col sm:flex-row items-center gap-3.5 w-full lg:w-auto">
            
            <!-- UI Pencarian Interaktif -->
            <form action="{{ route('admin.produk.index') }}" method="GET" class="w-full sm:w-72 relative">
                <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari nama semen, paku, cat..." 
                       class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200/80 rounded-2xl text-xs sm:text-sm font-semibold text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all">
                <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">search</span>
                @if(request('cari'))
                    <a href="{{ route('admin.produk.index') }}" class="absolute right-3.5 top-3 text-slate-400 hover:text-rose-500 font-bold text-xs">✕</a>
                @endif
            </form>

            <!-- Tombol Tambah Utama -->
            <a href="{{ route('admin.produk.create') }}" 
               class="w-full sm:w-auto px-6 py-3.5 bg-[#183059] hover:bg-[#112240] active:scale-[0.98] text-white font-black text-xs uppercase tracking-wider rounded-2xl shadow-xl shadow-[#183059]/20 transition-all flex items-center justify-center gap-2 flex-shrink-0 group">
                <span class="material-symbols-outlined text-base text-amber-400 group-hover:rotate-90 transition-transform">add_circle</span>
                <span>Tambah SKU Baru</span>
            </a>

        </div>

    </div>


    <!-- ================= 2. PENANGKAP PESAN SUKSES ================= -->
    @if(session('success'))
        <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-center justify-between shadow-sm animate-fade-in">
            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold">
                <span class="material-symbols-outlined text-emerald-600 text-xl">verified</span>
                <span>{{ session('success') }}</span>
            </div>
            <button onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800 font-bold text-xs">Tutup ✕</button>
        </div>
    @endif


    <!-- ================= 3. TABEL DATA SKU (Bersih & Sangat Terbaca) ================= -->
    <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] overflow-hidden">
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                
                <thead class="bg-slate-50/75 text-slate-400 text-[10px] font-black uppercase tracking-widest border-b border-slate-100 select-none">
                    <tr>
                        <th class="px-6 py-4.5">Produk Material</th>
                        <th class="px-6 py-4.5">Kategori Rak</th>
                        <th class="px-6 py-4.5">Harga Jual Resmi</th>
                        <th class="px-6 py-4.5 text-center">Stok Fisik</th>
                        <th class="px-6 py-4.5 text-center">Kendali Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100 text-xs sm:text-sm font-semibold text-slate-700">
                    
                    @forelse($produks as $item)
                    <tr class="hover:bg-slate-50/80 transition-colors group">
                        
                        <!-- Kolom 1: Foto + Judul + Kode SKU -->
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-slate-100 border border-slate-200/80 overflow-hidden flex-shrink-0 relative flex items-center justify-center p-1.5 shadow-inner">
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="w-full h-full object-cover rounded-xl group-hover:scale-110 transition-transform duration-500">
                                    @else
                                        <span class="material-symbols-outlined text-slate-300 text-2xl">image_not_supported</span>
                                    @endif
                                </div>
                                <div class="space-y-0.5">
                                    <span class="font-extrabold text-slate-900 block group-hover:text-[#183059] transition-colors truncate max-w-[220px] sm:max-w-xs leading-snug">
                                        {{ $item->nama_produk }}
                                    </span>
                                    <span class="text-[10px] font-mono font-bold text-slate-400 bg-slate-100 px-2 py-0.5 rounded">
                                        SKU-{{ str_pad($item->id_produk, 4, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                            </div>
                        </td>
                        
                        <!-- Kolom 2: Kategori -->
                        <td class="px-6 py-4">
                            <span class="px-3 py-1.5 rounded-xl bg-slate-100 text-slate-600 font-bold text-xs border border-slate-200/60 shadow-2xs">
                                {{ $item->kategori ?? 'Umum' }}
                            </span>
                        </td>
                        
                        <!-- Kolom 3: Harga Jual -->
                        <td class="px-6 py-4 font-mono">
                            <span class="text-[10px] font-bold text-slate-400">Rp</span>
                            <span class="text-sm font-black text-[#183059]">{{ number_format($item->harga_jual, 0, ',', '.') }}</span>
                        </td>
                        
                        <!-- Kolom 4: Kapsul Indikator Stok -->
                        <td class="px-6 py-4 text-center">
                            @if($item->jumlah_produk > 15)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200 text-xs font-black">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> {{ $item->jumlah_produk }} Unit
                                </span>
                            @elseif($item->jumlah_produk > 0)
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-amber-700 border border-amber-200 text-xs font-black animate-pulse">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Kritis: {{ $item->jumlah_produk }}
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-rose-50 text-rose-700 border border-rose-200 text-xs font-black">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Habis Total
                                </span>
                            @endif
                        </td>
                        
                        <!-- Kolom 5: Deretan Aksi 3 Tombol -->
                        <td class="px-6 py-4 text-center">
                            <div class="inline-flex items-center justify-center gap-1 bg-white p-1 rounded-2xl border border-slate-200/80 shadow-xs">
                                
                                <!-- Tombol 1: Intip Depan -->
                                <a href="{{ route('produk.show', $item->id_produk) }}" target="_blank"
                                   class="p-2 rounded-xl text-slate-400 hover:text-[#183059] hover:bg-slate-100 transition-all" title="Intip Tampilan Pengunjung">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </a>

                                <!-- Tombol 2: Edit Data -->
                                <a href="{{ route('admin.produk.edit', $item->id_produk) }}" 
                                   class="p-2 rounded-xl text-slate-400 hover:text-amber-600 hover:bg-amber-50 transition-all" title="Perbarui Spesifikasi">
                                    <span class="material-symbols-outlined text-[18px]">edit_square</span>
                                </a>

                                <!-- Tombol 3: Hapus SKU -->
                                <form action="{{ route('admin.produk.destroy', $item->id_produk) }}" method="POST" class="inline-block m-0"
                                      onsubmit="return confirm('⚠️ PERINGATAN ORACLE:\n\nAnda yakin ingin memusnahkan produk [ {{ addslashes($item->nama_produk) }} ] secara permanen dari database?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="p-2 rounded-xl text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-all cursor-pointer block" title="Musnahkan SKU">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-24 text-center bg-slate-50/50">
                            <div class="max-w-sm mx-auto space-y-3">
                                <div class="w-16 h-16 bg-white rounded-3xl border border-slate-200 flex items-center justify-center mx-auto shadow-sm">
                                    <span class="material-symbols-outlined text-4xl text-slate-300">dataset</span>
                                </div>
                                <h3 class="font-black text-slate-700 text-base">Tidak Ada Katalog Ditemukan</h3>
                                <p class="text-xs text-slate-400 leading-relaxed">Pencarian atau filter Anda tidak menghasilkan barang apa pun di dalam Oracle.</p>
                                @if(request('cari'))
                                    <a href="{{ route('admin.produk.index') }}" class="inline-block px-4 py-2 bg-[#183059] text-white text-xs font-bold rounded-xl shadow-md">Reset Kata Kunci Pencarian</a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <!-- Pagination Bar -->
        @if($produks->hasPages())
        <div class="p-6 border-t border-slate-100 bg-slate-50/50">
            {{ $produks->links() }}
        </div>
        @endif

    </div>

</div>

@endsection