@extends('layouts.admin')

@section('title', 'Hero Banner Staging Studio')
@section('header', 'Studio Kendali Wajah Depan Website')

@section('content')
<div class="max-w-6xl mx-auto space-y-6">

    <!-- ================= 1. HEADER & STATUS BAR ================= -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] flex flex-col sm:flex-row justify-between sm:items-center gap-4">
        <div class="space-y-1">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-amber-400/10 border border-amber-400/20 text-amber-600 text-xs font-black uppercase tracking-widest">
                <span class="material-symbols-outlined text-sm animate-spin-slow">web_stories</span> FRONTSTAGE STUDIO
            </div>
            <h2 class="text-xl sm:text-2xl font-black text-[#183059]">Konfigurasi Banner Utama (Hero)</h2>
        </div>

        <div class="flex items-center gap-2">
            <a href="{{ url('/') }}" target="_blank"
               class="px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-extrabold text-xs uppercase tracking-wider transition-all inline-flex items-center gap-1.5 shadow-2xs">
                <span class="material-symbols-outlined text-base">public</span>
                <span>Lihat Web Live</span>
            </a>
            <span class="text-xs font-mono font-bold bg-[#183059] text-amber-400 px-3.5 py-2.5 rounded-xl hidden md:block">
                ● Live Cache Sync
            </span>
        </div>
    </div>


    <!-- ================= 2. NOTIFIKASI SISTEM ================= -->
    @if(session('success'))
        <div class="p-5 rounded-3xl bg-emerald-50 border-2 border-emerald-200 text-emerald-900 flex items-center justify-between shadow-sm animate-fade-in">
            <div class="flex items-center gap-3 text-xs sm:text-sm font-black">
                <span class="material-symbols-outlined text-emerald-600 text-2xl">rocket_launch</span>
                <span>BERHASIL: {{ session('success') }}</span>
            </div>
            <button onclick="this.parentElement.remove()" class="text-emerald-600 font-black text-xs hover:underline">TUTUP ✕</button>
        </div>
    @endif

    @if ($errors->any())
        <div class="p-5 rounded-3xl bg-rose-50 border-2 border-rose-200 text-rose-900 space-y-2 animate-shake">
            <div class="flex items-center gap-2 font-black text-xs uppercase tracking-wider text-rose-600">
                <span class="material-symbols-outlined text-lg">gpp_bad</span> Tayangan Ditolak Server:
            </div>
            <ul class="list-disc list-inside text-xs space-y-1 font-semibold pl-1 text-rose-700">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- ================= 3. STUDIO EKSEKUSI UTAMA (7 : 5) ================= -->
    <form action="{{ route('admin.hero.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- KOLOM KIRI (7 Baris): Parameter Slogan & Copywriting -->
            <div class="lg:col-span-7 bg-white rounded-3xl p-6 sm:p-10 border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] space-y-6">
                
                <div class="border-b border-slate-100 pb-4 flex justify-between items-center">
                    <h3 class="text-sm font-black tracking-wider uppercase text-slate-400">Copywriting Slogan Web</h3>
                    <span class="text-[10px] font-mono font-bold text-slate-400">Section ID: #HERO-01</span>
                </div>

                <!-- 1. Headline Utama -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Judul Slogan Utama <span class="text-rose-500">*</span></label>
                    <input type="text" id="input-headline" name="title" value="{{ old('title', optional($hero)->title) }}" required
                           class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-base font-black text-[#183059] placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all"
                           placeholder="Contoh: Solusi Material Kokoh & Terukur">
                    <span class="text-[11px] font-semibold text-slate-400 mt-1.5 block">💡 Tips: Ketik maksimal 6-8 kata agar tidak pecah saat dibuka di HP pembeli.</span>
                </div>

                <!-- 2. Subtitle Deskripsi -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Deskripsi Singkat Toko <span class="text-rose-500">*</span></label>
                    <textarea id="input-desc" name="subtitle" rows="3" required
                              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-medium text-slate-600 placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all leading-relaxed"
                              placeholder="Menyediakan segala kebutuhan material konstruksi berkualitas SNI...">{{ old('subtitle', optional($hero)->subtitle) }}</textarea>
                </div>

                <!-- 3. Tombol Eksekusi Depan -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Tombol Kiri (Katalog)</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-base">inventory_2</span>
                            <input type="text" id="input-btn1" name="button_text_1" value="{{ old('button_text_1', optional($hero)->button_text_1) }}" required
                                   class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-black text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all uppercase">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Tombol Kanan (WhatsApp)</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3.5 top-3 text-emerald-500 text-base">chat</span>
                            <input type="text" id="input-btn2" name="button_text_2" value="{{ old('button_text_2', optional($hero)->button_text_2) }}" required
                                   class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-xs font-black text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all uppercase">
                        </div>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-blue-50/60 border border-blue-200 text-xs text-slate-600 flex items-center gap-3">
                    <span class="material-symbols-outlined text-[#183059] text-xl">verified_user</span>
                    <span>Teks tombol kanan diikat otomatis oleh mesin ke nomor WhatsApp CS Utama toko.</span>
                </div>

            </div>


            <!-- KOLOM KANAN (5 Baris): Live Visual Simulator & Switcher Latar -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- BOKS SIMULATOR MINI-WEB (Kesan Software 15 Juta) -->
                <div class="bg-[#183059] rounded-3xl p-6 sm:p-8 text-white shadow-2xl border border-slate-700 relative overflow-hidden flex flex-col justify-between min-h-[340px] group">
                    
                    <!-- Latar Gambar Simulator -->
                    @if(optional($hero)->image_path)
                        <img id="sim-bg-image" src="{{ asset('storage/' . $hero->image_path) }}" class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:scale-105 transition-transform duration-700" alt="Live Background">
                    @else
                        <img id="sim-bg-image" src="https://images.unsplash.com/photo-1504307651591-00dcc993a460?q=80&w=800&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-15" alt="Default Background">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-[#183059] via-[#183059]/80 to-transparent"></div>

                    <!-- Header Simulator -->
                    <div class="relative z-10 flex justify-between items-center border-b border-white/10 pb-3">
                        <span class="text-[10px] font-mono tracking-widest text-amber-400 uppercase">● Live Mini-Preview</span>
                        <span class="text-[9px] bg-white/10 px-2 py-0.5 rounded text-slate-300">16:9 Desktop View</span>
                    </div>

                    <!-- Konten Live Simulator JS -->
                    <div class="relative z-10 space-y-3 py-6 text-center my-auto">
                        <h4 id="sim-title" class="text-xl sm:text-2xl font-black leading-tight tracking-tight text-white drop-shadow-md">
                            {{ optional($hero)->title ?? 'Solusi Lengkap Material Bangunan' }}
                        </h4>
                        <p id="sim-desc" class="text-[11px] text-slate-300 line-clamp-2 px-4 leading-relaxed font-normal">
                            {{ optional($hero)->subtitle ?? 'Menyediakan berbagai material konstruksi berkualitas...' }}
                        </p>
                    </div>

                    <!-- Tombol Simulator JS -->
                    <div class="relative z-10 flex gap-2 pt-3 border-t border-white/10">
                        <div id="sim-btn1" class="w-1/2 py-2 bg-[#fd761a] text-white text-[9px] font-black uppercase text-center rounded-lg truncate px-1">
                            {{ optional($hero)->button_text_1 ?? 'LIHAT PRODUK' }}
                        </div>
                        <div id="sim-btn2" class="w-1/2 py-2 bg-white/10 text-white text-[9px] font-bold uppercase text-center rounded-lg border border-white/20 truncate px-1">
                            {{ optional($hero)->button_text_2 ?? 'HUBUNGI KAMI' }}
                        </div>
                    </div>

                </div>

                <!-- BOKS UPLOAD FOTO BACKGROUND -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] space-y-4">
                    <div class="flex justify-between items-center">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">Ganti Wallpaper Latar</label>
                        @if(optional($hero)->image_path)
                            <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">Wallpaper Terpasang</span>
                        @endif
                    </div>

                    <div class="relative">
                        <input type="file" name="image" accept="image/*" onchange="previewHeroBg(event)"
                               class="w-full text-xs text-slate-500 file:mr-3 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-extrabold file:bg-[#183059] file:text-amber-400 hover:file:bg-[#112240] cursor-pointer border border-slate-200 rounded-2xl p-1.5 bg-slate-50">
                    </div>
                    <span class="block text-[11px] text-slate-400 italic">*Format pemandangan melebar (Landscape 1920x1080 disarankan).</span>
                </div>

                <!-- TOMBOL EKSEKUSI SAKTI -->
                <div class="pt-2">
                    <button type="submit" 
                            class="w-full py-4 px-6 rounded-2xl bg-[#183059] hover:bg-[#112240] active:scale-[0.99] text-white font-extrabold text-xs uppercase tracking-widest shadow-xl shadow-[#183059]/25 transition-all flex items-center justify-center gap-2.5 group">
                        <span class="material-symbols-outlined text-amber-400 group-hover:rotate-45 transition-transform text-lg">publish</span>
                        <span>SIMPAN & TAYANGKAN KE INTERNET</span>
                    </button>
                </div>

            </div>

        </div>

    </form>

</div>


<!-- ================= 4. JAVASCRIPT LIVE STAGING SIMULATOR ================= -->
<script>
    // Sinkronisasi teks input ke mini-preview secara live
    const iHead = document.getElementById('input-headline');
    const iDesc = document.getElementById('input-desc');
    const iBtn1 = document.getElementById('input-btn1');
    const iBtn2 = document.getElementById('input-btn2');

    const sHead = document.getElementById('sim-title');
    const sDesc = document.getElementById('sim-desc');
    const sBtn1 = document.getElementById('sim-btn1');
    const sBtn2 = document.getElementById('sim-btn2');

    if(iHead) iHead.addEventListener('input', e => sHead.innerText = e.target.value || 'Judul Slogan Utama');
    if(iDesc) iDesc.addEventListener('input', e => sDesc.innerText = e.target.value || 'Deskripsi singkat toko material...');
    if(iBtn1) iBtn1.addEventListener('input', e => sBtn1.innerText = e.target.value || 'LIHAT PRODUK');
    if(iBtn2) iBtn2.addEventListener('input', e => sBtn2.innerText = e.target.value || 'HUBUNGI KAMI');

    // Live ganti wallpaper simulator saat pilih foto baru
    function previewHeroBg(event) {
        const simBg = document.getElementById('sim-bg-image');
        const reader = new FileReader();
        
        reader.onload = function() {
            if(reader.readyState === 2 && simBg) {
                simBg.src = reader.result;
                simBg.classList.remove('opacity-15', 'opacity-20');
                simBg.classList.add('opacity-40');
            }
        }
        if(event.target.files[0]) reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection