@extends('layouts.front')

@section('title', $produk->nama_produk . ' - Bangun Mulyo')

@section('content')

<!-- 1. BREADCRUMB NAVIGASI (Biar pengunjung tahu mereka sedang di mana) -->
<nav class="bg-slate-100 pt-28 pb-4 border-b border-slate-200 text-xs text-slate-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
        <a href="{{ url('/') }}" class="hover:text-[#183059] transition-colors">Beranda</a>
        <span>/</span>
        <a href="{{ route('produk.front') }}" class="hover:text-[#183059] transition-colors">Katalog</a>
        <span>/</span>
        <span class="font-bold text-[#183059] truncate max-w-xs">{{ $produk->nama_produk }}</span>
    </div>
</nav>

<!-- 2. AREA DETAIL UTAMA -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 flex-grow w-full space-y-12">
    
    <div class="bg-white p-6 sm:p-10 rounded-3xl shadow-xl border border-slate-100 grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
        
        <!-- SISI KIRI: Foto Showcase Barang (Col-span 6) -->
        <div class="lg:col-span-6 space-y-4">
            <div class="aspect-square bg-slate-50 rounded-2xl overflow-hidden border border-slate-200/80 relative flex items-center justify-center p-6 shadow-inner group">
                
                @if($produk->gambar)
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" 
                         class="w-full h-full object-cover rounded-xl group-hover:scale-105 transition-transform duration-500">
                @else
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($produk->nama_produk) }}&background=f1f5f9&color=183059&size=500" 
                         alt="{{ $produk->nama_produk }}" class="w-3/4 h-3/4 object-contain opacity-40 mix-blend-multiply">
                @endif

                <!-- Floating Kapsul Status -->
                <div class="absolute top-4 left-4">
                    <span class="px-3 py-1.5 rounded-lg text-xs font-black tracking-wider uppercase shadow-md {{ $produk->jumlah_produk > 0 ? 'bg-emerald-500 text-white' : 'bg-rose-600 text-white' }}">
                        {{ $produk->jumlah_produk > 0 ? '● Stok Gudang Ready' : 'Stok Kosong' }}
                    </span>
                </div>
            </div>

            <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-slate-200/60 text-xs text-slate-500">
                <span class="flex items-center gap-1.5 font-bold text-slate-700">
                    <span class="material-symbols-outlined text-amber-500 text-base">verified</span> Garansi Resmi Pabrik
                </span>
                <span>Diperbarui sistem hari ini</span>
            </div>
        </div>
        
        <!-- SISI KANAN: Panel Pembelian & Spesifikasi (Col-span 6) -->
        <div class="lg:col-span-6 flex flex-col justify-between space-y-8">
            
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 bg-blue-50 text-[#183059] border border-blue-100 rounded-md text-xs font-black uppercase tracking-wider">
                        {{ $produk->kategori ?? 'Material Konstruksi' }}
                    </span>
                    <span class="text-xs text-slate-400 font-mono">Kode: BM-{{ str_pad($produk->id_produk, 4, '0', STR_PAD_LEFT) }}</span>
                </div>

                <h1 class="text-2xl sm:text-4xl font-black text-slate-800 leading-tight">
                    {{ $produk->nama_produk }}
                </h1>

                <!-- Harga Jumbo -->
                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-baseline justify-between">
                    <div>
                        <span class="text-xs font-bold text-slate-400 uppercase block">Harga Eceran Resmi</span>
                        <div class="flex items-baseline gap-1">
                            <span class="text-sm font-bold text-amber-600">Rp</span>
                            <span class="text-3xl sm:text-4xl font-black text-[#183059]">{{ number_format($produk->harga_jual, 0, ',', '.') }}</span>
                        </div>
                    </div>
                    <span class="text-xs font-extrabold text-slate-500 bg-white px-3 py-1.5 rounded-lg border shadow-sm">/ Satuan</span>
                </div>

                <!-- Spesifikasi Ringkas B2B -->
                <div class="space-y-3 pt-2">
                    <h3 class="text-xs font-black uppercase tracking-wider text-slate-400">Informasi Material</h3>
                    
                    <div class="divide-y divide-slate-100 border border-slate-200 rounded-xl overflow-hidden text-xs sm:text-sm">
                        <div class="flex justify-between p-3.5 bg-white">
                            <span class="text-slate-500 font-medium">Ketersediaan Stok</span>
                            <span class="font-black text-slate-800">{{ $produk->jumlah_produk }} Unit Gudang</span>
                        </div>
                        <div class="flex justify-between p-3.5 bg-slate-50/50">
                            <span class="text-slate-500 font-medium">Pengiriman</span>
                            <span class="font-bold text-slate-700">Truk Dobel / Pick-Up Armada</span>
                        </div>
                        <div class="flex justify-between p-3.5 bg-white">
                            <span class="text-slate-500 font-medium">Pembelian Minimum</span>
                            <span class="font-bold text-slate-700">1 Satuan (Bisa Partai Besar)</span>
                        </div>
                    </div>
                </div>

                <div class="pt-2">
                    <h3 class="text-xs font-black uppercase tracking-wider text-slate-400 mb-1">Catatan Tambahan</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed text-justify bg-amber-50/50 p-3.5 rounded-xl border border-amber-200/60">
                        Harga yang tertera sewaktu-waktu dapat mengalami perubahan mengikuti fluktuasi harga bursa material nasional. Untuk pemesanan di atas 50 satuan, silakan ajukan diskon borongan.
                    </p>
                </div>
            </div>

            <!-- PANEL SIMULASI PESAN & ACTION BUTTON -->
            <div class="space-y-4 pt-4 border-t border-slate-200">
                
                @if($produk->jumlah_produk > 0)
                    <!-- KOTAK SIMULASI JUMLAH BELI -->
                    <div class="flex items-center gap-3">
                        <div class="w-1/3">
                            <label class="block text-[10px] font-black uppercase text-slate-400 mb-1">Rencana Beli:</label>
                            <input id="input-qty" type="number" min="1" max="{{ $produk->jumlah_produk }}" value="1" 
                                   class="w-full p-3 bg-slate-100 border border-slate-300 rounded-xl font-black text-center text-lg text-[#183059] outline-none focus:bg-white focus:ring-2 focus:ring-[#183059]">
                        </div>
                        <div class="w-2/3">
                            <label class="block text-[10px] font-black uppercase text-slate-400 mb-1">Estimasi Total:</label>
                            <div class="p-3 bg-amber-50 border border-amber-300 rounded-xl font-black text-amber-700 text-lg text-center truncate">
                                Rp <span id="total-text">{{ number_format($produk->harga_jual, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Super WhatsApp -->
                    <a id="btn-wa" href="#" target="_blank"
                       class="w-full py-4 bg-[#25D366] hover:bg-[#20ba5a] text-white rounded-2xl font-black text-sm uppercase tracking-wider text-center transition-all shadow-xl shadow-emerald-500/20 flex items-center justify-center gap-2.5 active:scale-95 group">
                        <span class="material-symbols-outlined text-2xl animate-bounce">shopping_cart_checkout</span>
                        <span>Pesan Barang Ini via WhatsApp</span>
                    </a>
                @else
                    <div class="p-4 bg-rose-50 border border-rose-200 rounded-2xl text-center space-y-1">
                        <span class="material-symbols-outlined text-rose-600 text-3xl">remove_shopping_cart</span>
                        <p class="font-bold text-rose-800 text-sm">Mohon Maaf, Barang Sedang Habis</p>
                        <p class="text-xs text-rose-600">Anda tidak dapat melakukan pemesanan untuk material ini sementara waktu.</p>
                    </div>
                @endif

                <a href="{{ route('produk.front') }}" 
                   class="block text-center text-xs font-bold text-slate-400 hover:text-[#183059] pt-2 transition-colors">
                    ← Kembali Memilih Katalog Lainnya
                </a>

            </div>

        </div>
    </div>

</main>


<!-- 3. JURUS JAVASCRIPT KALKULATOR HARGA INSTAN -->
<script>
    const hargaSatuan = {{ $produk->harga_jual }};
    const inputQty = document.getElementById('input-qty');
    const totalText = document.getElementById('total-text');
    const btnWa = document.getElementById('btn-wa');
    
    // Nomor WhatsApp Toko Anda
    const noWa = "6281234567890";
    const namaBarang = "{{ addslashes($produk->nama_produk) }}";

    function updateKalkulator() {
        if (!inputQty) return;
        let qty = parseInt(inputQty.value) || 1;
        
        // Batasi jangan sampai beli melebihi stok
        const maxStok = {{ $produk->jumlah_produk }};
        if(qty > maxStok) { qty = maxStok; inputQty.value = maxStok; }
        if(qty < 1) { qty = 1; inputQty.value = 1; }

        // Hitung perkalian
        const totalHarga = hargaSatuan * qty;
        totalText.innerText = new Intl.NumberFormat('id-ID').format(totalHarga);

        // Update isi pesan WhatsApp secara real-time!
        const textWa = `Halo Admin Bangun Mulyo, saya ingin memesan material berikut:%0A%0A` +
                       `📦 *Barang:* ${namaBarang}%0A` +
                       `🔢 *Jumlah:* ${qty} Satuan%0A` +
                       `💰 *Estimasi Harga:* Rp ${new Intl.NumberFormat('id-ID').format(totalHarga)}%0A%0A` +
                       `Mohon info ketersediaan armada pengiriman ke alamat proyek saya.`;

        btnWa.href = `https://wa.me/${noWa}?text=${textWa}`;
    }

    if(inputQty) {
        inputQty.addEventListener('input', updateKalkulator);
        // Jalankan sekali saat halaman pertama kali terbuka
        updateKalkulator();
    }
</script>

@endsection