@extends('layouts.admin')

@section('title', 'Spesifikasi Detil SKU')
@section('header', 'Audit Spesifikasi Material Gudang')

@section('content')

<div class="max-w-5xl mx-auto space-y-6">

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)]">
        <div class="space-y-1">
            <div class="inline-flex items-center gap-1.5 text-xs font-black tracking-widest text-[#183059] uppercase bg-blue-50 px-3 py-1 rounded-md border border-blue-100">
                <span class="material-symbols-outlined text-sm text-amber-500">plumbing</span> SKU VERIFIED DATA
            </div>
            <h2 class="text-xl sm:text-2xl font-black text-slate-800">Lembar Audit Barang #{{ str_pad($produk->id_produk, 4, '0', STR_PAD_LEFT) }}</h2>
        </div>

        <div class="flex items-center gap-2">
            <a href="{{ route('admin.produk.index') }}" 
               class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs uppercase tracking-wider transition-all inline-flex items-center gap-1.5">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                <span>Kembali</span>
            </a>
            <a href="{{ route('admin.produk.edit', $produk->id_produk) }}" 
               class="px-5 py-2.5 rounded-xl bg-[#fd761a] hover:bg-[#e06512] text-white font-black text-xs uppercase tracking-wider transition-all shadow-md shadow-[#fd761a]/20 inline-flex items-center gap-1.5 active:scale-95">
                <span class="material-symbols-outlined text-sm">edit_square</span>
                <span>Ubah Data Ini</span>
            </a>
        </div>
    </div>


    <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
        
        <div class="lg:col-span-4 space-y-4 flex flex-col justify-between">
            <div>
                <span class="text-[11px] font-black tracking-widest uppercase text-slate-400 block mb-2">Penampakan Fisik SKU</span>
                
                <div class="aspect-square rounded-2xl bg-slate-100 border border-slate-200 overflow-hidden relative flex items-center justify-center p-3 shadow-inner group">
                    @if($produk->gambar)
                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="w-full h-full object-cover rounded-xl group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="text-center space-y-1 text-slate-400">
                            <span class="material-symbols-outlined text-5xl">image_not_supported</span>
                            <p class="text-[10px] font-bold block">Tidak Ada Foto Terlampir</p>
                        </div>
                    @endif

                    <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-md px-2.5 py-1 rounded text-[10px] font-black text-white uppercase tracking-wider">
                        Rak: {{ $produk->kategori ?? 'Umum' }}
                    </div>
                </div>
            </div>

            <div class="pt-2">
                <a href="{{ route('produk.show', $produk->id_produk) }}" target="_blank"
                   class="w-full py-3.5 px-4 rounded-2xl border-2 border-[#183059] text-[#183059] hover:bg-[#183059] hover:text-white font-extrabold text-xs uppercase tracking-wider transition-all flex items-center justify-center gap-2 group">
                    <span class="material-symbols-outlined text-base">public</span>
                    <span>Intip di Toko Depan (Live)</span>
                    <span class="material-symbols-outlined text-xs opacity-50 group-hover:translate-x-0.5 transition-transform">open_in_new</span>
                </a>
            </div>
        </div>


        <div class="lg:col-span-8 space-y-6">
            
            <div class="border-b border-slate-100 pb-4 flex justify-between items-end">
                <div>
                    <span class="text-[11px] font-black tracking-widest uppercase text-slate-400 block">Parameter Utama</span>
                    <h1 class="text-2xl sm:text-3xl font-black text-[#183059] mt-0.5 leading-snug">{{ $produk->nama_produk }}</h1>
                </div>
                <span class="text-xs font-mono font-bold text-slate-400 bg-slate-100 px-3 py-1 rounded-lg border hidden sm:block">Oracle ID: #{{ $produk->id_produk }}</span>
            </div>

            <div class="border border-slate-200/80 rounded-2xl overflow-hidden divide-y divide-slate-100 text-xs sm:text-sm">
                
                <div class="grid grid-cols-3 p-4 bg-slate-50/60">
                    <span class="font-bold text-slate-400 uppercase text-[11px] self-center">Harga Jual Resmi</span>
                    <div class="col-span-2 font-mono font-black text-2xl text-[#183059] flex items-baseline gap-1">
                        <span class="text-xs font-bold text-slate-400">Rp</span>
                        <span>{{ number_format($produk->harga_jual, 0, ',', '.') }}</span>
                        <span class="text-[10px] font-sans font-extrabold text-slate-400 bg-white border px-2 py-0.5 rounded ml-2">/ Satuan</span>
                    </div>
                </div>

                <div class="grid grid-cols-3 p-4 bg-white items-center">
                    <span class="font-bold text-slate-400 uppercase text-[11px]">Klasifikasi Material</span>
                    <span class="col-span-2 font-bold text-slate-700 bg-blue-50/50 text-[#183059] border border-blue-100 px-3 py-1 rounded-lg w-max">
                        {{ $produk->kategori ?? 'Tanpa Kategori' }}
                    </span>
                </div>

                <div class="grid grid-cols-3 p-4 bg-slate-50/60 items-center">
                    <span class="font-bold text-slate-400 uppercase text-[11px]">Waktu Input Sistem</span>
                    <span class="col-span-2 font-mono text-slate-600 font-semibold">
                        {{ $produk->created_at ? $produk->created_at->format('d F Y - H:i') . ' WIB' : 'Sistem Legacy Lama' }}
                    </span>
                </div>

                <div class="grid grid-cols-3 p-4 bg-white items-center">
                    <span class="font-bold text-slate-400 uppercase text-[11px]">Terakhir Diperbarui</span>
                    <span class="col-span-2 font-mono text-slate-600 font-semibold">
                        {{ $produk->updated_at ? $produk->updated_at->format('d F Y - H:i') . ' WIB' : 'Belum Pernah Diubah' }}
                    </span>
                </div>

            </div>

            <div class="p-5 rounded-2xl border flex items-center justify-between {{ $produk->jumlah_produk < 10 ? 'bg-rose-50/80 border-rose-200 text-rose-900' : 'bg-emerald-50/80 border-emerald-200 text-emerald-900' }}">
                <div class="flex items-center gap-3.5">
                    <span class="material-symbols-outlined text-3xl {{ $produk->jumlah_produk < 10 ? 'text-rose-600 animate-bounce' : 'text-emerald-600' }}">
                        {{ $produk->jumlah_produk < 10 ? 'notification_important' : 'inventory_2' }}
                    </span>
                    <div>
                        <span class="text-[10px] font-black tracking-widest uppercase block {{ $produk->jumlah_produk < 10 ? 'text-rose-500' : 'text-emerald-600' }}">Status Ketersediaan Gudang</span>
                        <p class="font-black text-lg sm:text-xl leading-tight mt-0.5">
                            {{ $produk->jumlah_produk }} Satuan Fisik Ready
                        </p>
                    </div>
                </div>

                <div class="text-right hidden sm:block">
                    @if($produk->jumlah_produk < 10)
                        <span class="px-3 py-1 bg-rose-600 text-white rounded-lg text-[10px] font-black tracking-wider uppercase shadow-xs">
                            Kritis — Butuh Restock
                        </span>
                    @else
                        <span class="px-3 py-1 bg-emerald-600 text-white rounded-lg text-[10px] font-black tracking-wider uppercase shadow-xs">
                            Aman Terkendali
                        </span>
                    @endif
                </div>
            </div>
            </div>

    </div>

</div>

@endsection