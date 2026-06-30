@extends('layouts.front')

@section('title', 'Profil & Sejarah Distributor | Bangun Mulyo')

@section('content')

<!-- ================= 1. PAGE HEADER DENGAN WATERMARK TEKS ================= -->
<header class="relative overflow-hidden bg-[#183059] py-24 sm:py-32 pt-36">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#f59e0b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    
    <!-- Giant Watermark Latar -->
    <div class="absolute -right-10 -bottom-10 select-none pointer-events-none opacity-5">
        <span class="text-white font-black text-9xl tracking-tighter">EST.2010</span>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-400/10 border border-amber-400/20 text-amber-400 text-xs font-bold tracking-wider uppercase backdrop-blur-md">
            <span class="material-symbols-outlined text-sm">domain</span> TENTANG BANGUN MULYO
        </div>
        <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight">Menopang Konstruksi Jawa Barat</h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
            Berawal dari toko material sudut jalan pada tahun 2010, kini berkembang menjadi simpul distribusi material penyokong ribuan proyek arsitektur di daerah ini.
        </p>
    </div>
</header>
<!-- ================= PAGE HEADER END ================= -->


<main class="bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-28">

        <!-- ================= 2. SECTION SEJARAH DENGAN BADGE TAHUN ================= -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Foto Gudang + Floating Tahun -->
            <div class="lg:col-span-6 relative group">
                <div class="relative z-10 aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1541888946425-d0fbb18f0317?q=80&w=1000&auto=format&fit=crop" 
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Gudang Bangun Mulyo">
                </div>
                
                <!-- Floating Kapsul Pengalaman -->
                <div class="absolute -bottom-6 -right-6 z-20 bg-amber-500 text-[#183059] p-6 rounded-3xl shadow-xl border-4 border-white hidden sm:block">
                    <span class="block text-4xl font-black leading-none">16+</span>
                    <span class="text-xs font-extrabold tracking-wider uppercase mt-1 block">Tahun Mengabdi</span>
                </div>

                <!-- Ornamen Bayangan Kaca Belakang -->
                <div class="absolute -top-4 -left-4 w-full h-full rounded-3xl bg-[#183059]/10 -z-10"></div>
            </div>

            <!-- Teks Narasi -->
            <div class="lg:col-span-6 space-y-6 text-slate-600 text-sm sm:text-base leading-relaxed text-justify">
                <div class="space-y-2 text-left">
                    <span class="text-xs font-extrabold text-amber-600 tracking-widest uppercase">FILOSOFI KAMI</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-[#183059] tracking-tight">Kualitas Material Adalah Harga Diri Bangunan.</h2>
                </div>
                
                <p>
                    Didirikan dengan satu keyakinan sederhana: <strong class="text-[#183059]">Keterlambatan material adalah musuh terbesar para mandor.</strong> Kami memulai perjalanan ini dengan menjajakan semen dan paku secara eceran, menjaga takaran agar selalu jujur tanpa pernah mengurangi timbangan sekecil apa pun.
                </p>
                
                <p>
                    Seiring meningkatnya kepercayaan para kontraktor sipil dan pengembang perumahan, Bangun Mulyo bertransformasi menjadi pusat grosir distributor penyedia besi beton full SNI, semen partai besar, dan ribuan varian cat bangunan dengan armada pengiriman milik sendiri.
                </p>

                <div class="p-4 rounded-2xl bg-white border border-slate-200 shadow-sm flex items-center gap-4 text-left">
                    <div class="p-3 bg-blue-50 text-[#183059] rounded-xl font-bold">
                        <span class="material-symbols-outlined text-2xl">handshake</span>
                    </div>
                    <div class="text-xs">
                        <span class="font-black text-slate-800 block text-sm">Takaran Jujur & Transparan</span>
                        <span class="text-slate-500">Kami tidak pernah mengenakan biaya muat tersembunyi saat barang tiba di proyek.</span>
                    </div>
                </div>
            </div>

        </section>
        <!-- ================= SECTION SEJARAH END ================= -->


        <!-- ================= 3. 4 PILAR KEKUATAN DISTRIBUTOR ================= -->
        <section class="space-y-8">
            <div class="text-center max-w-2xl mx-auto space-y-2">
                <h3 class="text-xs font-extrabold text-amber-600 tracking-widest uppercase">MENGAPA MEMILIH KAMI?</h3>
                <h2 class="text-3xl sm:text-4xl font-black text-[#183059]">Standar Operasional Toko</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:border-[#183059] transition-all space-y-3">
                    <span class="material-symbols-outlined text-4xl text-[#183059]">verified_user</span>
                    <h4 class="font-black text-slate-800 text-lg">100% Produk SNI</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Menolak keras memasarkan besi banci atau material berstandar abal-abal.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:border-[#183059] transition-all space-y-3">
                    <span class="material-symbols-outlined text-4xl text-amber-500">local_shipping</span>
                    <h4 class="font-black text-slate-800 text-lg">Armada Siap Sedia</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Truk dobel dan engkel standby mengirim turun langsung ke titik bongkar proyek.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:border-[#183059] transition-all space-y-3">
                    <span class="material-symbols-outlined text-4xl text-emerald-600">inventory</span>
                    <h4 class="font-black text-slate-800 text-lg">Stok Buffer Masif</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Ketersediaan ribuan sak semen di gudang untuk mengamankan orderan dadakan Anda.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:border-[#183059] transition-all space-y-3">
                    <span class="material-symbols-outlined text-4xl text-purple-600">calculate</span>
                    <h4 class="font-black text-slate-800 text-lg">Estimasi Akurat</h4>
                    <p class="text-xs text-slate-500 leading-relaxed">Bantuan gratis menghitung kubikasi besi dan takaran cat agar proyek tidak boros.</p>
                </div>
            </div>
        </section>
        <!-- ================= 4 PILAR END ================= -->


        <!-- ================= 4. VISI & MISI DENGAN DESAIN ENTERPRISE ================= -->
        <section class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
            
            <!-- Visi (Col-span 5) -->
            <div class="md:col-span-5 bg-gradient-to-br from-[#183059] to-[#0f1f3a] text-white p-8 sm:p-12 rounded-3xl shadow-xl flex flex-col justify-between relative overflow-hidden border border-white/10">
                <div class="space-y-6 relative z-10">
                    <div class="w-14 h-14 bg-amber-500 rounded-2xl flex items-center justify-center text-[#183059] shadow-lg">
                        <span class="material-symbols-outlined text-3xl font-bold">visibility</span>
                    </div>
                    <h3 class="text-3xl font-black tracking-tight">Visi Perusahaan</h3>
                    <p class="text-slate-300 leading-relaxed text-sm sm:text-base text-justify">
                        Menjadi tulang punggung penyedia solusi material konstruksi nomor satu di wilayah Jawa Barat yang paling disegani karena kecepatan waktu pengiriman, transparansi harga grosir, dan kelengkapan stoknya.
                    </p>
                </div>
                
                <div class="pt-8 border-t border-white/10 text-xs text-amber-400 font-bold tracking-widest uppercase relative z-10">
                    Bangun Mulyo — Future Blueprint
                </div>

                <!-- Ornamen Cahaya Kiri Bawah -->
                <div class="absolute -bottom-20 -right-20 w-60 h-60 bg-amber-500/20 rounded-full blur-3xl pointer-events-none"></div>
            </div>

            <!-- Misi (Col-span 7) -->
            <div class="md:col-span-7 bg-white p-8 sm:p-12 rounded-3xl border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-8">
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-blue-50 text-[#183059] rounded-2xl flex items-center justify-center font-bold">
                            <span class="material-symbols-outlined text-3xl">flag</span>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-slate-400 uppercase">KOMITMEN KERJA</span>
                            <h3 class="text-3xl font-black text-[#183059]">Misi Utama Kami</h3>
                        </div>
                    </div>

                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-3.5">
                            <span class="material-symbols-outlined text-emerald-500 text-xl mt-0.5">check_circle</span>
                            <p class="text-sm sm:text-base text-slate-600"><strong class="text-slate-800">Kurasi Ketat Standar:</strong> Hanya mendistribusikan material berlabel SNI resmi dan lulus uji kelayakan struktural bangunan.</p>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <span class="material-symbols-outlined text-emerald-500 text-xl mt-0.5">check_circle</span>
                            <p class="text-sm sm:text-base text-slate-600"><strong class="text-slate-800">Eradikasi Biaya Gaib:</strong> Menjamin transparansi harga nota tanpa ada pungutan liar pemuatan di lapangan.</p>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <span class="material-symbols-outlined text-emerald-500 text-xl mt-0.5">check_circle</span>
                            <p class="text-sm sm:text-base text-slate-600"><strong class="text-slate-800">Disiplin Jam Logistik:</strong> Mengirim barang tepat waktu sesuai kesepakatan jadwal pengecoran atau bongkar proyek.</p>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex items-center justify-between text-xs text-slate-500">
                    <span>Ditinjau oleh Manajemen Staf</span>
                    <span class="font-mono font-bold text-[#183059]">SOP-BM-2026</span>
                </div>
            </div>

        </section>
        <!-- ================= VISI & MISI END ================= -->


        <!-- ================= 5. TOMBOL PULANG YANG ELEGAN ================= -->
        <div class="pt-6 text-center">
            <a href="{{ url('/') }}" 
               class="inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-2xl bg-white border-2 border-[#183059] text-[#183059] font-black text-xs uppercase tracking-wider hover:bg-[#183059] hover:text-white transition-all shadow-md active:scale-95 group">
                <span class="material-symbols-outlined text-base transition-transform group-hover:-translate-x-1">arrow_back</span>
                <span>Kembali ke Beranda Utama</span>
            </a>
        </div>

    </div>
</main>

@endsection