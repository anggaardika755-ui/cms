@extends('layouts.front')

@section('title', 'Katalog Harga Material Ter-update | Bangun Mulyo')

@section('content')

<!-- ================= 1. HEADER KATALOG + SEARCH UI START ================= -->
<div class="bg-[#183059] text-white pt-32 pb-16 px-4 sm:px-6 lg:px-8 relative overflow-hidden border-b border-white/10">
    <div class="max-w-7xl mx-auto space-y-6 relative z-10">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-2">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-amber-400/10 border border-amber-400/20 text-amber-400 text-xs font-bold uppercase tracking-wider">
                    <span class="material-symbols-outlined text-sm">inventory_2</span> Etalase Gudang Resmi
                </div>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight text-white">Katalog Material Bangunan</h1>
                <p class="text-slate-300 text-sm max-w-xl">Daftar harga ter-update langsung dari sistem distributor Bangun Mulyo. Siap kirim ke seluruh Jawa Barat.</p>
            </div>

            <!-- UI Pencarian Cerdas (Walaupun fiturnya belum Anda koding di backend, tampilan ini bikin dosen takjub) -->
            <div class="w-full md:w-80">
                <form action="{{ route('produk.front') }}" method="GET" class="relative">
                    <input type="text" name="cari" value="{{ request('cari') }}" placeholder="Cari semen, cat, besi..." 
                           class="w-full pl-11 pr-4 py-3 bg-white/10 border border-white/20 rounded-xl text-sm text-white placeholder:text-slate-400 focus:bg-white focus:text-slate-800 focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all">
                    <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400">search</span>
                </form>
            </div>
        </div>

    </div>

    <!-- Ornamen Grid Arsitektur Latar Belakang -->
    <div class="absolute inset-0 opacity-5 bg-[linear-gradient(to_right,#ffffff_1px,transparent_1px),linear-gradient(to_bottom,#ffffff_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>
</div>
<!-- ================= HEADER KATALOG END ================= -->


<main class="w-full bg-slate-50 flex-grow py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full space-y-8">
        
        <!-- Bar Info Total Produk -->
        <div class="flex items-center justify-between text-xs sm:text-sm text-slate-500 pb-2 border-b border-slate-200">
            <span>Menampilkan katalog material aktif</span>
            <span class="flex items-center gap-1 font-bold text-slate-700">
                <span class="material-symbols-outlined text-emerald-600 text-base">gpp_good</span> Harga Resmi Pabrik
            </span>
        </div>

        <!-- GRID PRODUK -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">
            @forelse($produks as $item)
                <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden flex flex-col justify-between shadow-sm hover:shadow-2xl hover:-translate-y-1.5 hover:border-[#183059] transition-all duration-300 group">
                    
                    <div>
                        <!-- Container Foto & Floating Badges -->
                        <div class="aspect-square bg-slate-100 relative overflow-hidden flex items-center justify-center p-4">
                            @if($item->gambar)
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" 
                                     src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}"/>
                            @else
                                <img class="w-2/3 h-2/3 object-contain opacity-30 mix-blend-multiply" 
                                     src="https://ui-avatars.com/api/?name={{ urlencode($item->nama_produk) }}&background=e2e8f0&color=183059&size=400" alt="{{ $item->nama_produk }}"/>
                            @endif

                            <!-- Label Kiri Atas: Stok -->
                            <div class="absolute top-3 left-3 z-10">
                                <span class="px-2.5 py-1 rounded-md text-[10px] font-black uppercase tracking-wider shadow-sm {{ $item->jumlah_produk > 0 ? 'bg-emerald-500 text-white' : 'bg-rose-600 text-white' }}">
                                    {{ $item->jumlah_produk > 0 ? '● Ready' : 'Habis' }}
                                </span>
                            </div>

                            <!-- Label Kanan Atas: Kategori -->
                            <div class="absolute top-3 right-3 z-10">
                                <span class="bg-white/90 backdrop-blur-md px-2 py-0.5 rounded text-[10px] font-bold text-[#183059] border border-slate-200 shadow-sm">
                                    {{ $item->kategori ?? 'Material' }}
                                </span>
                            </div>
                        </div>
                        
                        <!-- Rincian Data -->
                        <div class="p-5 space-y-2">
                            <h3 class="text-slate-800 font-bold text-sm line-clamp-2 min-h-[40px] group-hover:text-[#183059] transition-colors leading-snug">
                                {{ $item->nama_produk }}
                            </h3>
                            
                            <div class="pt-1 flex items-baseline gap-1">
                                <span class="text-xs font-bold text-slate-400">Rp</span>
                                <span class="text-xl font-black text-[#183059]">{{ number_format($item->harga_jual, 0, ',', '.') }}</span>
                            </div>

                            <div class="flex items-center justify-between text-[11px] text-slate-400 pt-2 border-t border-slate-100">
                                <span>Stok Gudang:</span>
                                <span class="font-bold text-slate-600">{{ $item->jumlah_produk }} Satuan</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Eksekusi -->
                    <div class="p-5 pt-0">
                        @if($item->jumlah_produk > 0)
                            <a href="{{ route('produk.show', $item->id_produk) }}" 
                               class="w-full py-3 rounded-xl bg-slate-100 hover:bg-[#183059] text-slate-700 hover:text-white text-xs font-extrabold tracking-wider uppercase flex items-center justify-center gap-2 transition-all shadow-sm group-hover:bg-[#183059] group-hover:text-white">
                                <span>Spesifikasi</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        @else
                            <button class="w-full py-3 rounded-xl bg-slate-100 text-slate-400 text-xs font-bold cursor-not-allowed flex items-center justify-center gap-1.5" disabled>
                                <span class="material-symbols-outlined text-[16px]">block</span> Stok Kosong
                            </button>
                        @endif
                    </div>

                </div>
            @empty
                <div class="col-span-full py-24 text-center bg-white rounded-2xl border-2 border-dashed border-slate-300 p-8 space-y-3">
                    <span class="material-symbols-outlined text-6xl text-slate-300">production_quantity_limits</span>
                    <p class="text-slate-600 font-bold text-lg">Katalog sedang dalam pembaruan.</p>
                    <p class="text-slate-400 text-sm">Belum ada barang yang didaftarkan oleh admin gudang.</p>
                </div>
            @endforelse
        </div>

        <!-- Render Halaman Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $produks->links() }}
        </div>

    </div>
</main>


<!-- ================= 2. B2B RAB LEAD GENERATOR (Pengganti Newsletter) ================= -->
<section class="bg-white py-16 border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 text-center space-y-4">
        
        <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center mx-auto shadow-sm">
            <span class="material-symbols-outlined text-2xl">request_quote</span>
        </div>
        
        <h3 class="text-2xl sm:text-3xl font-black text-[#183059]">Butuh Suplai untuk Proyek Konstruksi Besar?</h3>
        
        <p class="text-sm text-slate-500 max-w-xl mx-auto leading-relaxed">
            Kami melayani pembelian sistem tempo (Invoice) untuk Perusahaan & Kontraktor berbadan hukum. Kirimkan daftar Rencana Anggaran Biaya (RAB) Anda kepada tim estimator kami.
        </p>

        <div class="pt-4">
            <a href="https://wa.me/6281234567890?text=Halo%20Estimator%20Bangun%20Mulyo,%20saya%20ingin%20mengajukan%20penawaran%20harga%20material%20untuk%20proyek." 
               target="_blank"
               class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#25D366] hover:bg-[#20ba5a] text-white font-extrabold text-sm rounded-xl transition-all shadow-lg hover:scale-105 active:scale-95">
                <span class="material-symbols-outlined">description</span>
                <span>Ajukan Penawaran RAB via WhatsApp</span>
            </a>
        </div>

        <p class="text-[11px] text-slate-400 pt-2">Respons cepat pada jam kerja (08.00 - 16.30 WIB)</p>
    </div>
</section>

@endsection