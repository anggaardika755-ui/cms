@extends('layouts.admin')

@section('title', 'Daftarkan SKU Baru')
@section('header', 'Pusat Registrasi Material Gudang')

@section('content')

<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)]">
        <div class="space-y-1">
            <div class="inline-flex items-center gap-2 text-xs font-black tracking-widest text-[#fd761a] uppercase">
                <span class="material-symbols-outlined text-sm">add_circle</span> INTAKE FORM
            </div>
            <h2 class="text-xl sm:text-2xl font-black text-[#183059]">Input Spesifikasi Barang</h2>
        </div>

        <a href="{{ route('admin.produk.index') }}" 
           class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs uppercase tracking-wider transition-all w-max group">
            <span class="material-symbols-outlined text-base transition-transform group-hover:-translate-x-1">arrow_back</span>
            <span>Batalkan & Kembali</span>
        </a>
    </div>


    @if ($errors->any())
        <div class="p-5 rounded-3xl bg-rose-50 border-2 border-rose-200 text-rose-800 space-y-2 animate-shake">
            <div class="flex items-center gap-2 font-black text-xs uppercase tracking-wider text-rose-600">
                <span class="material-symbols-outlined text-lg">error</span> Sistem Menolak Penyimpanan:
            </div>
            <ul class="list-disc list-inside text-xs space-y-1 font-semibold pl-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf

        <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
            
            <div class="lg:col-span-7 space-y-6">
                
                <div class="border-b border-slate-100 pb-4">
                    <h3 class="text-sm font-black tracking-wider uppercase text-slate-400">Parameter Dasar SKU</h3>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Nama Resmi Material / Merek <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">construction</span>
                        <input type="text" name="nama_produk" value="{{ old('nama_produk') }}" required autofocus
                               placeholder="Contoh: Semen Gresik PPC 40kg" 
                               class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-bold text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Klasifikasi Gudang <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">category</span>
                        <select name="kategori" required 
                                class="w-full pl-11 pr-10 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-bold text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all appearance-none cursor-pointer">
                            <option value="">-- Tentukan Kategori Penempatan --</option>
                            @php
                                $kategories = ['Semen', 'Besi dan Baja', 'Bata dan Batako', 'Pipa dan Plumbing', 'Peralatan Bangunan', 'Cat Bangunan', 'Atap dan Genteng'];
                            @endphp
                            @foreach($kategories as $kat)
                                <option value="{{ $kat }}" {{ old('kategori') == $kat ? 'selected' : '' }}>Rak: {{ $kat }}</option>
                            @endforeach
                        </select>
                        <span class="material-symbols-outlined absolute right-3.5 top-3 text-slate-400 pointer-events-none">expand_more</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Harga Jual Satuan <span class="text-rose-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-3.5 top-3 text-xs font-black text-slate-400">Rp</span>
                            <input type="number" name="harga_jual" value="{{ old('harga_jual') }}" min="0" required
                                   placeholder="65000" 
                                   class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-black text-[#183059] placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all font-mono">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Stok Fisik Gudang <span class="text-rose-500">*</span></label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">inventory_2</span>
                            <input type="number" name="jumlah_produk" value="{{ old('jumlah_produk') }}" min="0" required
                                   placeholder="50" 
                                   class="w-full pl-11 pr-12 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-black text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all text-center">
                            <span class="absolute right-3.5 top-3.5 text-[10px] font-black uppercase text-slate-400">Unit</span>
                        </div>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-amber-50/60 border border-amber-200/80 flex items-start gap-3">
                    <span class="material-symbols-outlined text-amber-600 text-xl flex-shrink-0">info</span>
                    <p class="text-xs text-amber-900 leading-relaxed">
                        Pastikan penulisan harga **tanpa menggunakan tanda titik atau koma** (Contoh salah: 65.000 $\rightarrow$ yang benar: 65000).
                    </p>
                </div>

            </div>


            <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
                
                <div class="space-y-4">
                    <div class="border-b border-slate-100 pb-4">
                        <h3 class="text-sm font-black tracking-wider uppercase text-slate-400">Visual Katalog</h3>
                    </div>

                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">Foto Fisik Material</label>

                    <div class="relative group">
                        
                        <div id="image-preview-container" class="w-full aspect-square bg-slate-50 border-2 border-dashed border-slate-300 rounded-3xl overflow-hidden flex flex-col items-center justify-center p-6 text-center group-hover:border-[#183059] transition-all relative">
                            
                            <div id="placeholder-upload" class="space-y-2 pointer-events-none">
                                <div class="w-16 h-16 rounded-2xl bg-white shadow-sm border border-slate-200 flex items-center justify-center mx-auto text-[#183059]">
                                    <span class="material-symbols-outlined text-3xl">add_photo_alternate</span>
                                </div>
                                <p class="text-xs font-bold text-slate-600">Klik atau Pilih Dokumen Foto</p>
                                <p class="text-[10px] text-slate-400">PNG, JPG, JPEG (Max. 2MB)</p>
                            </div>

                            <img id="render-preview" class="w-full h-full object-cover hidden absolute inset-0 rounded-3xl" alt="Preview Gambar">

                        </div>

                        <input id="input-file" type="file" name="gambar" accept="image/*" 
                               class="absolute inset-0 opacity-0 cursor-pointer w-full h-full z-10" 
                               onchange="previewFoto(event)">

                    </div>

                    <p id="file-name-text" class="text-center font-mono text-xs text-emerald-600 font-bold truncate hidden"></p>
                </div>

                <div class="pt-6">
                    <button type="submit" 
                            class="w-full py-4 px-6 rounded-2xl bg-[#183059] hover:bg-[#112240] active:scale-[0.99] text-white font-extrabold text-xs uppercase tracking-widest shadow-xl shadow-[#183059]/25 transition-all flex items-center justify-center gap-2 group">
                        <span class="material-symbols-outlined text-lg text-emerald-400 group-hover:scale-125 transition-transform">cloud_upload</span>
                        <span>MANTAP, DAFTARKAN KE ORACLE</span>
                    </button>
                </div>

            </div>

        </div>

    </form>

</div>


<script>
    function previewFoto(event) {
        const reader = new FileReader();
        const placeholder = document.getElementById('placeholder-upload');
        const previewImg = document.getElementById('render-preview');
        const fileName = document.getElementById('file-name-text');

        reader.onload = function() {
            if(reader.readyState === 2) {
                previewImg.src = reader.result;
                previewImg.classList.remove('hidden');
                placeholder.classList.add('hidden');
                
                // Tampilkan nama filenya di bawah kotak
                fileName.innerText = '📁 Dokumen terpilih: ' + event.target.files[0].name;
                fileName.classList.remove('hidden');
            }
        }

        if(event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>

@endsection