@extends('layouts.front')

@section('title', 'Distributor Material Bangunan Terpercaya | Bangun Mulyo')

@section('content')

<header class="relative min-h-[90vh] flex items-center justify-center pt-24 pb-16 px-4 sm:px-6 lg:px-8 overflow-hidden bg-[#183059]">
    
    <div class="absolute inset-0 z-0">
        <img src="{{ optional($hero)->image_path ? asset('storage/' . $hero->image_path) : 'https://images.unsplash.com/photo-1504307651591-00dcc993a460?q=80&w=1920&auto=format&fit=crop' }}"
             alt="Bangun Mulyo Hero" class="w-full h-full object-cover object-center absolute inset-0 scale-105 animate-pulse-slow">
        <div class="absolute inset-0 bg-gradient-to-r from-[#183059]/95 via-[#183059]/85 to-[#183059]/70"></div>
    </div>
    
    <div class="relative z-10 max-w-5xl mx-auto text-center space-y-6 sm:space-y-8">
        
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-amber-400 text-xs sm:text-sm font-bold tracking-wide shadow-inner">
            <span class="material-symbols-outlined text-base animate-spin-slow">engineering</span>
            <span>MITRA RESMI KONTRAKTOR & DEVELOPER JAWA BARAT</span>
        </div>

        <h1 class="text-white font-black text-4xl sm:text-6xl lg:text-7xl tracking-tight leading-none max-w-4xl mx-auto">
            {{ optional($hero)->title ?? 'Solusi Material Bangunan Kokoh & Terukur.' }}
        </h1>
        
        <p class="text-slate-200 text-base sm:text-xl font-normal max-w-2xl mx-auto leading-relaxed opacity-90">
            {{ optional($hero)->subtitle ?? 'Menyediakan segala kebutuhan konstruksi mulai dari fondasi hingga atap dengan jaminan kualitas SNI dan harga harga grosir terbaik.' }}
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
            <a href="{{ route('produk.front') }}" 
               class="w-full sm:w-auto px-8 py-4 bg-amber-500 text-[#183059] font-black text-sm uppercase tracking-wider rounded-xl hover:bg-amber-400 hover:scale-105 active:scale-95 transition-all shadow-xl shadow-amber-500/20 text-center">
                {{ optional($hero)->button_text_1 ?? 'Buka Katalog Produk' }}
            </a>
            
            <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Bangun%20Mulyo,%20saya%20ingin%20berkonsultasi%20kebutuhan%20material." target="_blank"
               class="w-full sm:w-auto px-8 py-4 border-2 border-white/80 bg-white/5 text-white font-bold text-sm rounded-xl backdrop-blur-sm hover:bg-white hover:text-[#183059] active:scale-95 transition-all text-center flex items-center justify-center gap-2">
               <span class="material-symbols-outlined text-emerald-400">chat</span>
                {{ optional($hero)->button_text_2 ?? 'Konsultasi via WhatsApp' }}
            </a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 pt-12 border-t border-white/15 max-w-4xl mx-auto text-white">
            <div class="p-2">
                <p class="text-2xl sm:text-3xl font-black text-amber-400">15+ thn</p>
                <p class="text-xs text-slate-300 font-medium">Pengalaman Melayani</p>
            </div>
            <div class="p-2">
                <p class="text-2xl sm:text-3xl font-black text-amber-400">100%</p>
                <p class="text-xs text-slate-300 font-medium">Jaminan Standar SNI</p>
            </div>
            <div class="p-2">
                <p class="text-2xl sm:text-3xl font-black text-amber-400">5.000+</p>
                <p class="text-xs text-slate-300 font-medium">Proyek Terselesaikan</p>
            </div>
            <div class="p-2">
                <p class="text-2xl sm:text-3xl font-black text-amber-400">Tepat</p>
                <p class="text-xs text-slate-300 font-medium">Waktu Pengiriman</p>
            </div>
        </div>

    </div>
</header>
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 space-y-28">

    <section>
        <div class="text-center max-w-3xl mx-auto mb-12 space-y-3">
            <h2 class="text-xs font-extrabold uppercase tracking-widest text-amber-600">Pencarian Cepat</h2>
            <p class="text-2xl sm:text-4xl font-extrabold text-[#183059]">Kategori Material Utama</p>
            <div class="w-16 h-1 bg-amber-500 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6">
            @php
                $kategori = [
                    ['icon' => 'architecture', 'label' => 'Semen'],
                    ['icon' => 'grid_on', 'label' => 'Besi & Baja'],
                    ['icon' => 'foundation', 'label' => 'Bata & Batako'],
                    ['icon' => 'format_paint', 'label' => 'Cat Bangunan'],
                    ['icon' => 'roofing', 'label' => 'Atap & Genteng'],
                    ['icon' => 'handyman', 'label' => 'Peralatan']
                ];
            @endphp

            @foreach ($kategori as $kat)
                <a href="{{ route('produk.front') }}" 
                   class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 hover:border-[#183059] hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-[#183059] transition-colors duration-300 shadow-inner">
                        <span class="material-symbols-outlined text-[#183059] group-hover:text-amber-400 text-3xl transition-colors duration-300">{{ $kat['icon'] }}</span>
                    </div>
                    <span class="font-bold text-sm text-slate-700 group-hover:text-[#183059]">{{ $kat['label'] }}</span>
                </a>
            @endforeach
        </div>
    </section>
    <section class="space-y-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-slate-200 pb-6">
            <div>
                <span class="text-xs font-extrabold uppercase tracking-widest text-amber-600">Rekomendasi Kontraktor</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#183059] mt-1">Produk Terlaris Mingguan</h2>
            </div>
            <a href="{{ route('produk.front') }}" class="inline-flex items-center gap-1 font-bold text-sm text-[#183059] hover:text-amber-600 group">
                <span>Lihat Seluruh Katalog</span>
                <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
            </a>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($produkUnggulan as $item)
                <div class="bg-white rounded-2xl shadow-md border border-slate-100 overflow-hidden hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="h-64 bg-slate-100 overflow-hidden relative">
                            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" 
                                 alt="{{ $item->nama_produk }}" 
                                 src="{{ $item->gambar ? asset('storage/' . $item->gambar) : 'https://images.unsplash.com/photo-1589939705384-5185137a7f0f?w=600&auto=format&fit=crop' }}"/>
                            
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 rounded-full text-xs font-extrabold shadow-md {{ $item->jumlah_produk > 0 ? 'bg-emerald-500 text-white' : 'bg-rose-500 text-white' }}">
                                    {{ $item->jumlah_produk > 0 ? '● Stok Ready' : 'Habis' }}
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-3">
                            <h3 class="font-bold text-lg text-slate-800 line-clamp-1 group-hover:text-[#183059] transition-colors">{{ $item->nama_produk }}</h3>
                            <div class="flex items-baseline gap-1">
                                <span class="text-xs font-bold text-slate-400">Rp</span>
                                <span class="text-2xl font-black text-[#183059]">{{ number_format($item->harga_jual, 0, ',', '.') }}</span>
                                <span class="text-xs text-slate-500 font-medium">/ satuan</span>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-2">
                        <a href="{{ route('produk.show', $item->id_produk) }}" 
                           class="block w-full py-3 px-4 rounded-xl bg-slate-100 hover:bg-[#183059] text-slate-700 hover:text-white font-bold text-xs text-center tracking-wider uppercase transition-all shadow-sm">
                            Lihat Spesifikasi
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16 bg-slate-50 rounded-2xl border-2 border-dashed border-slate-300">
                    <span class="material-symbols-outlined text-5xl text-slate-400 mb-2">inventory_2</span>
                    <p class="text-slate-600 font-bold">Belum ada barang yang didaftarkan ke etalase.</p>
                </div>
            @endforelse
        </div>
    </section>
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-start gap-4">
            <div class="p-3 bg-blue-50 text-[#183059] rounded-xl font-bold">
                <span class="material-symbols-outlined text-2xl">verified</span>
            </div>
            <div>
                <h4 class="font-extrabold text-slate-800 text-base">Material Bersertifikat</h4>
                <p class="text-xs text-slate-500 mt-1 leading-relaxed">Jaminan semen tidak menggumpal dan besi full SNI.</p>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-start gap-4">
            <div class="p-3 bg-amber-50 text-amber-600 rounded-xl font-bold">
                <span class="material-symbols-outlined text-2xl">local_shipping</span>
            </div>
            <div>
                <h4 class="font-extrabold text-slate-800 text-base">Armada Sendiri</h4>
                <p class="text-xs text-slate-500 mt-1 leading-relaxed">Pengiriman langsung turun ke bongkaran lokasi proyek.</p>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-start gap-4">
            <div class="p-3 bg-emerald-50 text-emerald-600 rounded-xl font-bold">
                <span class="material-symbols-outlined text-2xl">payments</span>
            </div>
            <div>
                <h4 class="font-extrabold text-slate-800 text-base">Harga Transparan</h4>
                <p class="text-xs text-slate-500 mt-1 leading-relaxed">Harga grosir terbuka tanpa ada potongan gaib di nota.</p>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex items-start gap-4">
            <div class="p-3 bg-purple-50 text-purple-600 rounded-xl font-bold">
                <span class="material-symbols-outlined text-2xl">support_agent</span>
            </div>
            <div>
                <h4 class="font-extrabold text-slate-800 text-base">Konsultasi Gratis</h4>
                <p class="text-xs text-slate-500 mt-1 leading-relaxed">Bantuan hitung kubikasi dan kebutuhan takaran cat.</p>
            </div>
        </div>
    </section>
    <section class="bg-slate-900 rounded-3xl overflow-hidden shadow-2xl text-white border border-slate-800">
        <div class="grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-6 h-80 lg:h-auto relative min-h-[350px]">
                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1000&auto=format&fit=crop" 
                     class="w-full h-full object-cover opacity-85" alt="Gudang Toko">
                <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-slate-900 via-transparent to-transparent"></div>
            </div>
            
            <div class="lg:col-span-6 p-8 sm:p-12 lg:p-16 flex flex-col justify-center space-y-6">
                <div class="space-y-2">
                    <span class="text-xs font-black tracking-widest uppercase text-amber-400">TENTANG BANGUN MULYO</span>
                    <h2 class="text-3xl sm:text-4xl font-black leading-tight">Membangun Fondasi Kepercayaan Sejak 2010.</h2>
                </div>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Kami bukan sekadar toko penjual material. Bangun Mulyo lahir sebagai tulang punggung rantai pasok ribuan mandor di Jawa Barat. Dengan gudang logistik seluas 2.000 meter persegi, kami memastikan proyek Anda tidak pernah terhenti akibat kelangkaan semen atau keterlambatan besi beton.
                </p>
                <div class="pt-2">
                    <a href="{{ route('profil') }}" 
                       class="inline-flex items-center gap-2 px-6 py-3.5 bg-[#183059] border border-slate-700 hover:border-amber-400 text-white font-bold text-xs uppercase tracking-wider rounded-xl transition-all shadow-lg group">
                        <span>Lihat Profil & Sejarah Lengkap</span>
                        <span class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-1 text-amber-400">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="space-y-12">
        <div class="text-center max-w-2xl mx-auto space-y-2">
            <span class="text-xs font-extrabold uppercase tracking-widest text-amber-600">Bukti Nyata di Lapangan</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-[#183059]">Apa Kata Para Mandor?</h2>
            <p class="text-slate-500 text-sm">Reputasi kami dibangun di atas beton proyek mereka.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between relative">
                <div class="text-amber-400 text-lg tracking-widest mb-4">★★★★★</div>
                <p class="text-slate-600 text-sm italic mb-8 leading-relaxed">"Sangat puas belanja di Bangun Mulyo. Harga semen dan besi betonnya paling kompetitif dibanding toko lain. Pengiriman armada cepat sampai ke lokasi proyek."</p>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-100">
                    <img class="w-12 h-12 rounded-full object-cover ring-2 ring-[#183059]/20" alt="Andi" src="https://ui-avatars.com/api/?name=Andi+Setiawan&background=183059&color=ffffff"/>
                    <div>
                        <p class="font-extrabold text-[#183059] text-sm">Andi Setiawan</p>
                        <p class="text-xs text-slate-400 font-medium">Kontraktor Sipil</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between relative">
                <div class="text-amber-400 text-lg tracking-widest mb-4">★★★★★</div>
                <p class="text-slate-600 text-sm italic mb-8 leading-relaxed">"Pilihan catnya lengkap sekali. Adminnya sangat membantu saat saya bingung menghitung kebutuhan warna untuk renovasi ruko. Terima kasih Bangun Mulyo!"</p>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-100">
                    <img class="w-12 h-12 rounded-full object-cover ring-2 ring-[#183059]/20" alt="Siska" src="https://ui-avatars.com/api/?name=Siska+Amelia&background=0d9488&color=ffffff"/>
                    <div>
                        <p class="font-extrabold text-[#183059] text-sm">Siska Amelia</p>
                        <p class="text-xs text-slate-400 font-medium">Pemilik Proyek Ruko</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between relative">
                <div class="text-amber-400 text-lg tracking-widest mb-4">★★★★★</div>
                <p class="text-slate-600 text-sm italic mb-8 leading-relaxed">"Stok selalu ready meskipun saya order dadakan dalam partai besar. Pelayanan admin via WhatsApp juga responsif 24 jam. Sangat recommended!"</p>
                <div class="flex items-center gap-4 pt-4 border-t border-slate-100">
                    <img class="w-12 h-12 rounded-full object-cover ring-2 ring-[#183059]/20" alt="Bambang" src="https://ui-avatars.com/api/?name=Bambang+Wijaya&background=ea580c&color=ffffff"/>
                    <div>
                        <p class="font-extrabold text-[#183059] text-sm">Bambang Wijaya</p>
                        <p class="text-xs text-slate-400 font-medium">Site Manager Proyek</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="bg-gradient-to-br from-[#183059] to-[#0f1f3a] rounded-3xl p-8 sm:p-16 flex flex-col items-center text-center text-white shadow-2xl overflow-hidden relative border border-white/10">
        <div class="absolute -top-24 -right-24 w-80 h-80 bg-amber-500 rounded-full opacity-10 blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -left-24 w-80 h-80 bg-blue-500 rounded-full opacity-10 blur-3xl pointer-events-none"></div>
        
        <span class="text-xs font-black tracking-widest uppercase text-amber-400 mb-3 relative z-10">PESANAN PARTAI BESAR</span>
        <h2 class="font-black text-3xl sm:text-5xl mb-4 relative z-10 max-w-2xl">Siap Memulai Konstruksi Proyek Anda?</h2>
        <p class="text-slate-300 text-sm sm:text-base mb-10 max-w-xl relative z-10">Dapatkan penawaran harga penawaran khusus RAB proyek dan gratis ongkos kirim untuk pengiriman wilayah tertentu.</p>
        
        <div class="flex flex-col sm:flex-row items-center gap-4 w-full sm:w-auto relative z-10">
            <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20ingin%20mengirimkan%20RAB%20untuk%20penawaran%20material." target="_blank"
               class="w-full sm:w-auto px-8 py-4 bg-[#25D366] text-white font-extrabold text-sm rounded-xl hover:bg-[#20ba5a] hover:scale-105 active:scale-95 transition-all shadow-xl flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">send</span>
                <span>Kirim List Kebutuhan via WA</span>
            </a>
            
            <a href="{{ route('kontak') }}" 
               class="w-full sm:w-auto px-8 py-4 bg-white/10 text-white hover:bg-white hover:text-[#183059] border border-white/20 font-bold text-sm rounded-xl transition-all text-center">
                Alamat & Peta Gudang
            </a>
        </div>
    </section>
    </main>
@endsection