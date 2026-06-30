@extends('layouts.front')

@section('title', 'Pusat Kontak & Lokasi Gudang | Bangun Mulyo')

@section('content')

<!-- ================= 1. HERO SECTION START ================= -->
<section class="relative h-[450px] flex items-center justify-center pt-20 overflow-hidden bg-[#183059]">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover brightness-[0.35] scale-105 animate-pulse-slow" 
             alt="Interior Gudang Bangun Mulyo" 
             src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=1600&auto=format&fit=crop">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-50 via-transparent to-transparent opacity-90"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-400/10 border border-amber-400/30 text-amber-400 text-xs font-bold uppercase tracking-widest backdrop-blur-md">
            <span class="material-symbols-outlined text-sm">support_agent</span> Layanan Mitra & Pelanggan
        </div>
        <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight">Hubungi Bangun Mulyo</h1>
        <p class="text-slate-300 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
            Tim estimator dan customer service kami siap membantu menghitung Rencana Anggaran Biaya (RAB), mengecek ketersediaan stok semen, dan menjadwalkan pengiriman armada.
        </p>
    </div>
</section>
<!-- ================= HERO SECTION END ================= -->


<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-20 relative z-20 pb-24 space-y-24">

    <!-- ================= 2. CONTACT KAPSUL INFO START ================= -->
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="bg-white p-6 rounded-3xl shadow-xl border border-slate-100 flex flex-col items-center text-center hover:-translate-y-1.5 hover:border-[#183059] transition-all duration-300 group">
            <div class="w-14 h-14 bg-blue-50 text-[#183059] rounded-2xl flex items-center justify-center mb-4 group-hover:bg-[#183059] group-hover:text-amber-400 transition-colors shadow-inner">
                <span class="material-symbols-outlined text-3xl">location_on</span>
            </div>
            <h3 class="font-extrabold text-slate-800 text-base mb-1">Alamat Gudang</h3>
            <p class="text-xs text-slate-500 leading-relaxed">Jl. Raya Industri No. 45, Terusan Pasteur, Bandung</p>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-xl border border-slate-100 flex flex-col items-center text-center hover:-translate-y-1.5 hover:border-[#183059] transition-all duration-300 group">
            <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-emerald-500 group-hover:text-white transition-colors shadow-inner">
                <span class="material-symbols-outlined text-3xl">phone_in_talk</span>
            </div>
            <h3 class="font-extrabold text-slate-800 text-base mb-1">Telepon Kantor</h3>
            <p class="text-xs text-slate-500 leading-relaxed font-mono font-bold">+62 838-3142-8699</p>
            <span class="text-[10px] text-emerald-600 font-bold mt-1">● Aktif Jam Kerja</span>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-xl border border-slate-100 flex flex-col items-center text-center hover:-translate-y-1.5 hover:border-[#183059] transition-all duration-300 group">
            <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-amber-500 group-hover:text-white transition-colors shadow-inner">
                <span class="material-symbols-outlined text-3xl">mail</span>
            </div>
            <h3 class="font-extrabold text-slate-800 text-base mb-1">Email Resmi</h3>
            <p class="text-xs text-slate-500 leading-relaxed font-mono">sales@bangunmulyo.com</p>
            <span class="text-[10px] text-slate-400 mt-1">Untuk Pengiriman PO / RAB</span>
        </div>

        <div class="bg-white p-6 rounded-3xl shadow-xl border border-slate-100 flex flex-col items-center text-center hover:-translate-y-1.5 hover:border-[#183059] transition-all duration-300 group">
            <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors shadow-inner">
                <span class="material-symbols-outlined text-3xl">schedule</span>
            </div>
            <h3 class="font-extrabold text-slate-800 text-base mb-1">Jam Operasional</h3>
            <p class="text-xs text-slate-500 leading-relaxed">Senin – Sabtu<br><strong class="text-slate-700">08.00 – 16.30 WIB</strong></p>
        </div>

    </section>
    <!-- ================= CONTACT KAPSUL INFO END ================= -->


    <!-- ================= 3. SPLIT SECTION: FORM vs DIRECT WA START ================= -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start pt-6">
        
        <!-- SISI KIRI: Direct WhatsApp Order (Col-span 5) -->
        <div class="lg:col-span-5 bg-gradient-to-br from-[#183059] to-[#0f1f3a] text-white p-8 sm:p-10 rounded-3xl shadow-2xl space-y-8 border border-white/10 relative overflow-hidden">
            <div class="space-y-4 relative z-10">
                <span class="px-3 py-1 rounded-md bg-[#25D366]/20 text-[#25D366] border border-[#25D366]/30 font-black text-[10px] tracking-wider uppercase block w-max">
                    Jalur Cepat Kontraktor
                </span>
                <h2 class="text-3xl font-black leading-tight">Butuh Suplai Dadakan Hari Ini?</h2>
                <p class="text-slate-300 text-xs sm:text-sm leading-relaxed text-justify">
                    Tidak perlu menunggu balasan formulir email. Jika proyek Anda sedang butuh pengecoran darurat atau tambahan paku & cat besi, langsung sambungkan ke WhatsApp Customer Service kami.
                </p>
            </div>

            <div class="space-y-4 relative z-10 pt-2">
                <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Bangun%20Mulyo,%20saya%20membutuhkan%20suplai%20material%20segera%20untuk%20proyek." 
                   target="_blank"
                   class="w-full py-4 px-6 bg-[#25D366] hover:bg-[#20ba5a] text-white rounded-2xl font-black text-sm uppercase tracking-wider flex items-center justify-center gap-3 shadow-xl hover:scale-[1.02] active:scale-95 transition-all group">
                    <span class="material-symbols-outlined text-2xl animate-bounce">chat</span>
                    <span>Chat WhatsApp CS (Fast)</span>
                </a>

                <div class="p-4 rounded-2xl bg-white/5 border border-white/10 space-y-2 text-xs text-slate-300">
                    <div class="flex items-center gap-2 text-amber-400 font-bold">
                        <span class="material-symbols-outlined text-base">local_shipping</span> Info Logistik:
                    </div>
                    <p class="leading-relaxed">Batas waktu pemesanan agar dikirim pada hari yang sama adalah pukul <strong class="text-white underline">14.00 WIB</strong>. Melebihi jam tersebut dikirim esok pagi.</p>
                </div>
            </div>

            <!-- Efek Kaca Latar -->
            <div class="absolute -bottom-24 -right-24 w-72 h-72 bg-emerald-500/15 rounded-full blur-3xl pointer-events-none"></div>
        </div>

        <!-- SISI KANAN: Formulir Database Pesan (Col-span 7) -->
        <div class="lg:col-span-7 bg-white p-8 sm:p-12 rounded-3xl shadow-xl border border-slate-200/80 space-y-6">
            <div>
                <span class="text-xs font-extrabold text-amber-600 tracking-widest uppercase block mb-1">TINGGALKAN PESAN</span>
                <h2 class="text-2xl sm:text-3xl font-black text-[#183059]">Formulir Penawaran RAB / Kerjasama</h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">Pesan Anda akan masuk ke dalam dashboard admin sistem kami.</p>
            </div>

            {{-- Notifikasi Berhasil Kirim --}}
            @if(session('success'))
                <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-2xl flex items-center gap-3 text-xs sm:text-sm font-bold animate-fade-in">
                    <span class="material-symbols-outlined text-emerald-600 text-xl">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('kontak.kirim') }}" method="POST" class="space-y-4">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Lengkap / Mandor</label>
                        <input type="text" name="nama_lengkap" required 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3.5 text-sm text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all" 
                               placeholder="Contoh: Budi (Proyek Ruko)">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Alamat Email Aktif</label>
                        <input type="email" name="email" required 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3.5 text-sm text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all" 
                               placeholder="budi@gmail.com">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Nomor WhatsApp / HP</label>
                        <input type="tel" name="nomor_telepon" required 
                               class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3.5 text-sm text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all" 
                               placeholder="08123456789">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Subjek Kebutuhan</label>
                        <select name="subjek" 
                                class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3.5 text-sm text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all">
                            <option value="Informasi Stok">Tanya Ketersediaan Stok</option>
                            <option value="Penawaran Harga">Minta Penawaran Harga (RAB)</option>
                            <option value="Kerjasama Proyek">Kerjasama Suplai Proyek Besar</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Rincian Material / Pesan</label>
                    <textarea name="pesan" rows="4" required 
                              class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3.5 text-sm text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all" 
                              placeholder="Tuliskan jenis semen, ukuran besi, atau spesifikasi cat yang Anda butuhkan..."></textarea>
                </div>

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full py-4 bg-[#183059] hover:bg-[#112240] text-white font-extrabold text-xs uppercase tracking-widest rounded-xl shadow-lg shadow-[#183059]/20 transition-all flex items-center justify-center gap-2 active:scale-95 group">
                        <span>Kirim Pesan ke Dashboard Admin</span>
                        <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform text-amber-400">send</span>
                    </button>
                </div>
            </form>
        </div>

    </section>
    <!-- ================= SPLIT SECTION END ================= -->


    <!-- ================= 4. MAPS INTERAKTIF & PETA GUDANG START ================= -->
    <section class="space-y-6 pt-6">
        <div class="text-center max-w-xl mx-auto space-y-1">
            <h3 class="text-2xl font-black text-[#183059]">Lokasi Bongkar Muat Gudang</h3>
            <p class="text-xs sm:text-sm text-slate-500">Armada pembeli diperbolehkan masuk langsung untuk pemuatan mandiri.</p>
        </div>

        <div class="rounded-3xl overflow-hidden shadow-2xl border border-slate-200 h-[450px] relative bg-slate-200">
            <!-- Peta Google Maps Embed Asli Kota Bandung -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311684129782!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1710000000000!5m2!1sen!2sid" 
                    class="w-full h-full border-0 grayscale hover:grayscale-0 transition-all duration-700" 
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!-- Floating Card Info Lokasi di Pojok Kiri Bawah -->
            <div class="absolute bottom-6 left-6 right-6 sm:right-auto sm:max-w-sm bg-white/95 backdrop-blur-md p-6 rounded-2xl border border-slate-200/80 shadow-2xl space-y-3 pointer-events-auto">
                <div class="flex items-center gap-2 text-[#183059] font-black text-sm">
                    <span class="material-symbols-outlined text-amber-500">warehouse</span>
                    <span>Gudang Utama Bangun Mulyo</span>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed">Jl. Raya Industri No. 45, Terusan Pasteur, Bandung, Jawa Barat 40161</p>
                <a href="https://maps.google.com" target="_blank" 
                   class="inline-flex items-center gap-1 text-xs font-bold text-[#183059] hover:text-amber-600 underline">
                    <span>Buka di Aplikasi Google Maps</span>
                    <span class="material-symbols-outlined text-xs">open_in_new</span>
                </a>
            </div>
        </div>
    </section>
    <!-- ================= MAPS END ================= -->


    <!-- ================= 5. FAQ AKORDION ENTERPRISE START ================= -->
    <section class="max-w-3xl mx-auto space-y-8 pt-6">
        <div class="text-center space-y-2">
            <span class="text-xs font-extrabold uppercase tracking-widest text-amber-600">SOLUSI KEBINGUNGAN PELANGGAN</span>
            <h2 class="text-2xl sm:text-3xl font-black text-[#183059]">Pertanyaan Umum (FAQ)</h2>
        </div>

        <div class="space-y-4">
            
            <details class="group bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm [&_summary::-webkit-details-marker]:hidden" open>
                <summary class="flex justify-between items-center p-6 cursor-pointer select-none font-bold text-sm sm:text-base text-slate-800 hover:text-[#183059] transition-colors">
                    <span>Apakah bisa melayani pemesanan sistem tempo (RAB Proyek)?</span>
                    <span class="material-symbols-outlined transition-transform duration-300 group-open:-rotate-180 text-amber-500">expand_more</span>
                </summary>
                <div class="px-6 pb-6 text-xs sm:text-sm text-slate-500 leading-relaxed border-t border-slate-100 pt-4">
                    Ya, kami melayani kerjasama suplai material jangka panjang untuk perusahaan kontraktor berbadan hukum dengan sistem pembayaran tempo berdasarkan progress opname atau termin kesepakatan.
                </div>
            </details>

            <details class="group bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex justify-between items-center p-6 cursor-pointer select-none font-bold text-sm sm:text-base text-slate-800 hover:text-[#183059] transition-colors">
                    <span>Bagaimana kebijakan retur jika ada semen membatu atau kelebihan besi?</span>
                    <span class="material-symbols-outlined transition-transform duration-300 group-open:-rotate-180 text-amber-500">expand_more</span>
                </summary>
                <div class="px-6 pb-6 text-xs sm:text-sm text-slate-500 leading-relaxed border-t border-slate-100 pt-4">
                    Barang yang rusak saat penurunan oleh armada kami akan langsung diganti baru pada hari yang sama. Untuk kelebihan material utuh (semen belum dibuka / paku utuh per dus), dapat diretur maksimal 3 hari setelah pengiriman.
                </div>
            </details>

            <details class="group bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex justify-between items-center p-6 cursor-pointer select-none font-bold text-sm sm:text-base text-slate-800 hover:text-[#183059] transition-colors">
                    <span>Apakah menyediakan gratis ongkos kirim?</span>
                    <span class="material-symbols-outlined transition-transform duration-300 group-open:-rotate-180 text-amber-500">expand_more</span>
                </summary>
                <div class="px-6 pb-6 text-xs sm:text-sm text-slate-500 leading-relaxed border-t border-slate-100 pt-4">
                    Gratis ongkos kirim berlaku untuk pengiriman dalam radius 10 KM dari gudang kami dengan minimal pembelanjaan nominal tertentu. Di luar radius tersebut, dihitung biaya kubikasi bersahabat.
                </div>
            </details>

        </div>
    </section>
    <!-- ================= FAQ END ================= -->

</main>

@endsection