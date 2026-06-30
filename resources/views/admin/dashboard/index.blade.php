@extends('layouts.admin')

@section('title', 'Control Panel')
@section('header', 'Ikhtisar Inventaris Gudang')

@section('content')
<div class="space-y-8">
    
    <!-- ================= 1. GREETING BANNER (Kesan Software Mahal) ================= -->
    <div class="relative overflow-hidden rounded-3xl bg-[#183059] p-8 text-white shadow-xl">
        <div class="relative z-10 flex flex-col justify-between gap-4 md:flex-row md:items-center">
            <div class="space-y-1">
                <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-[11px] font-extrabold uppercase tracking-widest text-amber-400 backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                    Oracle DB Connected
                </div>
                <h1 class="text-2xl sm:text-3xl font-black tracking-tight">Selamat Datang, {{ auth()->user()->name ?? 'Administrator' }}!</h1>
                <p class="text-xs sm:text-sm text-slate-300">Pantau pergerakan stok semen, cat, dan besi beton secara real-time hari ini.</p>
            </div>
            
            <!-- Jam/Tanggal Live Sistem -->
            <div class="rounded-2xl bg-white/10 p-4 backdrop-blur-md border border-white/15 text-right hidden sm:block">
                <span class="block font-mono text-xl font-black text-amber-400">{{ date('H:i') }} WIB</span>
                <span class="text-[11px] font-bold tracking-wider text-slate-200 uppercase">{{ date('D, d M Y') }}</span>
            </div>
        </div>
        
        <!-- Ornamen Latar -->
        <div class="absolute -right-10 -bottom-10 w-64 h-64 rounded-full bg-[#fd761a]/20 blur-3xl pointer-events-none"></div>
    </div>


    <!-- ================= 2. 4 KARTU STATISTIK UTAMA ================= -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        
        <!-- Kartu 1: Total -->
        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] relative overflow-hidden group hover:border-[#183059] hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <span class="text-[11px] font-black tracking-widest uppercase text-slate-400 block mb-1">Total Material</span>
                    <h3 class="text-4xl font-black text-[#183059]">{{ $totalProduk ?? 0 }}</h3>
                </div>
                <div class="p-3.5 rounded-2xl bg-blue-50 text-[#183059] group-hover:bg-[#183059] group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">warehouse</span>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1 text-[11px] font-bold text-slate-400">
                <span class="material-symbols-outlined text-xs text-emerald-500">check_circle</span> Terdaftar di Etalase
            </div>
            <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-8xl text-slate-50 opacity-60 pointer-events-none group-hover:scale-110 transition-transform">inventory_2</span>
        </div>
        
        <!-- Kartu 2: Menipis -->
        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] relative overflow-hidden group hover:border-amber-500 hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <span class="text-[11px] font-black tracking-widest uppercase text-amber-500 block mb-1">Stok Menipis</span>
                    <h3 class="text-4xl font-black text-amber-600">{{ $stokMenipis ?? 0 }}</h3>
                </div>
                <div class="p-3.5 rounded-2xl bg-amber-50 text-amber-600 group-hover:bg-amber-500 group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">warning</span>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1 text-[11px] font-bold text-amber-600">
                <span>● Butuh Order ke Pabrik</span>
            </div>
            <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-8xl text-amber-50/50 pointer-events-none group-hover:scale-110 transition-transform">production_quantity_limits</span>
        </div>
        
        <!-- Kartu 3: Habis -->
        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] relative overflow-hidden group hover:border-rose-600 hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <span class="text-[11px] font-black tracking-widest uppercase text-rose-500 block mb-1">Stok Habis</span>
                    <h3 class="text-4xl font-black text-rose-600">{{ $stokHabis ?? 0 }}</h3>
                </div>
                <div class="p-3.5 rounded-2xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">remove_shopping_cart</span>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1 text-[11px] font-bold text-rose-600 animate-pulse">
                <span>▲ Kritis: Pembeli Kecewa</span>
            </div>
            <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-8xl text-rose-50/50 pointer-events-none group-hover:scale-110 transition-transform">error</span>
        </div>
        
        <!-- Kartu 4: Kategori -->
        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] relative overflow-hidden group hover:border-emerald-500 hover:-translate-y-1 transition-all duration-300">
            <div class="flex justify-between items-start relative z-10">
                <div>
                    <span class="text-[11px] font-black tracking-widest uppercase text-slate-400 block mb-1">Kategori Aktif</span>
                    <h3 class="text-4xl font-black text-emerald-600">{{ $totalKategori ?? 0 }}</h3>
                </div>
                <div class="p-3.5 rounded-2xl bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-2xl">category</span>
                </div>
            </div>
            <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1 text-[11px] font-bold text-slate-400">
                <span>Pengelompokan Rak</span>
            </div>
            <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-8xl text-emerald-50/50 pointer-events-none group-hover:scale-110 transition-transform">grid_view</span>
        </div>

    </div>


    <!-- ================= 3. SPLIT AREA: TABEL KRITIS vs QUICK ACTIONS ================= -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- KOLOM KIRI (8 Baris): Tabel Kritis -->
        <div class="lg:col-span-8 bg-white rounded-3xl border border-slate-100 shadow-xl overflow-hidden">
            <div class="p-6 sm:p-8 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center animate-bounce">
                        <span class="material-symbols-outlined">notification_important</span>
                    </div>
                    <div>
                        <h2 class="font-black text-slate-800 text-base sm:text-lg">Material Kritis</h2>
                        <p class="text-xs text-slate-400">Barang dengan sisa stok di bawah batas aman</p>
                    </div>
                </div>

                <a href="{{ route('admin.produk.index') }}" 
                   class="text-xs font-extrabold text-[#183059] bg-[#183059]/10 px-4 py-2 rounded-xl hover:bg-[#183059] hover:text-white transition-all shadow-sm">
                    Kelola Seluruh Stok →
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50/80 text-slate-400 text-[10px] uppercase font-black tracking-widest border-b border-slate-100">
                        <tr>
                            <th class="px-6 py-4">Nama Produk Material</th>
                            <th class="px-6 py-4">Kategori</th>
                            <th class="px-6 py-4 text-right">Kondisi Stok</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-xs sm:text-sm font-semibold text-slate-700">
                        @forelse($produkKritis ?? [] as $item)
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-6 py-4">
                                <span class="text-slate-900 font-bold group-hover:text-[#183059] transition-colors">{{ $item->nama_produk }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 rounded-md bg-slate-100 text-slate-500 text-[11px] font-bold">{{ $item->kategori }}</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <!-- METERAN STOK VISUAL (Jurus Dosen Kagum) -->
                                <div class="flex items-center justify-end gap-3">
                                    <div class="w-20 bg-slate-100 h-2 rounded-full overflow-hidden hidden sm:block border">
                                        @php $persen = min(($item->jumlah_produk / 15) * 100, 100); @endphp
                                        <div class="bg-rose-500 h-full rounded-full transition-all duration-500" style="width: {{ $persen }}%"></div>
                                    </div>
                                    <span class="inline-block px-3 py-1 bg-rose-50 text-rose-600 rounded-lg font-black text-xs border border-rose-100">
                                        {{ $item->jumlah_produk }} Unit
                                    </span>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-6 py-16 text-center text-slate-400 space-y-2">
                                <span class="material-symbols-outlined text-5xl text-emerald-500 block">verified</span>
                                <p class="font-bold text-slate-700">Aman Terkendali!</p>
                                <p class="text-xs">Tidak ada stok material yang berada di bawah batas kritis.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- KOLOM KANAN (4 Baris): Panel Pintasan Kerja -->
        <div class="lg:col-span-4 space-y-6">
            
            <div class="bg-white p-6 sm:p-8 rounded-3xl border border-slate-100 shadow-xl space-y-5">
                <h3 class="font-black text-slate-800 text-base tracking-tight flex items-center gap-2">
                    <span class="material-symbols-outlined text-[#fd761a]">bolt</span> Pintasan Cepat Staf
                </h3>

                <div class="space-y-3">
                    <a href="{{ url('/admin/produk/create') }}" 
                       class="flex items-center justify-between p-3.5 rounded-2xl bg-[#183059] text-white hover:bg-[#112240] transition-all shadow-md group">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-amber-400">add_box</span>
                            <span class="text-xs font-black tracking-wider uppercase">Input Material Baru</span>
                        </div>
                        <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>

                    <a href="{{ url('/') }}" target="_blank"
                       class="flex items-center justify-between p-3.5 rounded-2xl bg-slate-50 border border-slate-200 text-slate-700 hover:border-[#183059] hover:bg-white transition-all group">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#183059]">public</span>
                            <span class="text-xs font-bold">Lihat Toko Depan (Live)</span>
                        </div>
                        <span class="material-symbols-outlined text-xs text-slate-400">open_in_new</span>
                    </a>

                    <a href="https://web.whatsapp.com" target="_blank"
                       class="flex items-center justify-between p-3.5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 hover:bg-emerald-500 hover:text-white transition-all group">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-emerald-600 group-hover:text-white transition-colors">chat</span>
                            <span class="text-xs font-bold">Buka WhatsApp Web CS</span>
                        </div>
                        <span class="material-symbols-outlined text-xs">forum</span>
                    </a>
                </div>
            </div>

            <!-- Kartu Info Sistem -->
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 p-6 rounded-3xl text-white shadow-lg space-y-3 border border-slate-700">
                <div class="flex items-center gap-2 text-amber-400 font-bold text-xs">
                    <span class="material-symbols-outlined text-sm">info</span> Panduan Singkat:
                </div>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Jika Anda selesai menambah barang baru lewat panel ini, jangan lupa jalankan perintah <code class="text-amber-300 font-mono">php artisan optimize:clear</code> agar cache foto langsung ter-refresh di HP pembeli.
                </p>
            </div>

        </div>

    </div>

</div>
@endsection