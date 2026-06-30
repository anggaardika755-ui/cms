@extends('layouts.admin')

@section('title', 'Perbarui Spesifikasi SKU')
@section('header', 'Pusat Manajemen Data Material')

@section('content')

<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)]">
        <div class="space-y-1">
            <div class="inline-flex items-center gap-2 text-xs font-black tracking-widest text-[#fd761a] uppercase">
                <span class="material-symbols-outlined text-sm">edit_note</span> UPDATE MASTER DATA
            </div>
            <h2 class="text-xl sm:text-2xl font-black text-[#183059]">Ubah Log SKU #{{ str_pad($produk->id_produk, 4, '0', STR_PAD_LEFT) }}</h2>
        </div>

        <a href="{{ route('admin.produk.index') }}" 
           class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs uppercase tracking-wider transition-all w-max group">
            <span class="material-symbols-outlined text-base transition-transform group-hover:-translate-x-1">arrow_back</span>
            <span>Batal & Kembali</span>
        </a>
    </div>


    @if ($errors->any())
        <div class="p-5 rounded-3xl bg-rose-50 border-2 border-rose-200 text-rose-800 space-y-2 animate-shake">
            <div class="flex items-center gap-2 font-black text-xs uppercase tracking-wider text-rose-600">
                <span class="material-symbols-outlined text-lg">error</span> Gagal Memperbarui Data:
            </div>
            <ul class="list-disc list-inside text-xs space-y-1 font-semibold pl-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('admin.produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
            
            <div class="lg:col-span-7 space-y-6">
                
                <div class="border-b border-slate-100 pb-4 flex justify-between items-center">
                    <h3 class="text-sm font-black tracking-wider uppercase text-slate-400">Parameter SKU Saat Ini</h3>
                    <span class="text-[10px] font-mono font-bold text-slate-400 bg-slate-100 px-2 py-0.5 rounded">Oracle Row Verified</span>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Nama Resmi Material / Merek <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">construction</span>
                        <input type="text" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}" required
                               class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-bold text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Klasifikasi Gudang <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">category</span>
                        <select name="kategori" required 
                                class="w-full pl-11 pr-10 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-bold text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all appearance-none cursor-pointer">
                            @php
                                $kategories = ['Semen', 'Besi dan Baja', 'Bata dan Batako', 'Pipa dan Plumbing', 'Peralatan Bangunan', 'Cat Bangunan', 'Atap dan Genteng'];
                            @endphp
                            @foreach($kategories as $kat)
                                <option value="{{ $kat }}" {{ old('kategori', $produk->kategori) == $kat ? 'selected' : '' }}>Rak: {{ $kat }}</option>
                            @endforeach
                        </select>
                        <span class="material-symbols-outlined absolute right-3.5 top-3 text-slate-400 pointer-events-none">expand_more</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Harga Jual Satuan (Rp) <span class="text-rose-500">*</span></label>
                        <div class="relative">
                            <span class="absolute left-3.5 top-3 text-xs font-black text-slate-400">Rp</span>
                            <input type="number" name="harga_jual" value="{{ old('harga_jual', $produk->harga_jual) }}" min="0" required
                                   class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-black text-[#183059] focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all font-mono">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Update Stok Fisik <span class="text-rose-500">*</span></label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">inventory_2</span>
                            <input type="number" name="jumlah_produk" value="{{ old('jumlah_produk', $produk->jumlah_produk) }}" min="0" required
                                   class="w-full pl-11 pr-12 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-black text-slate-800 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all text-center">
                            <span class="absolute right-3.5 top-3.5 text-[10px] font-black uppercase text-slate-400">Unit</span>
                        </div>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-amber-50/60 border border-amber-200/80 flex items-start gap-3">
                    <span class="material-symbols-outlined text-amber-600 text-xl flex-shrink-0">info</span>
                    <p class="text-xs text-amber-900 leading-relaxed">
                        Sistem kasir depan (WhatsApp link) otomatis mengkalkulasi ulang harga total belanjaan kontraktor secara real-time sesaat setelah data ini berhasil disimpan.
                    </p>
                </div>

            </div>


            <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
                
                <div class="space-y-4">
                    <div class="border-b border-slate-100 pb-4">
                        <h3 class="text-sm font-black tracking-wider uppercase text-slate-400">Visualisasi Etalase</h3>
                    </div>

                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700">Gambar Logistik SKU</label>

                    <div class="relative group">
                        
                        <div class="w-full aspect-square bg-slate-50 border-2 border-solid border-slate-200 rounded-3xl overflow-hidden flex flex-col items-center justify-center p-4 relative shadow-inner">
                            
                            @if($produk->gambar)
                                <img id="old-server-image" src="{{ asset('storage/' . $produk->gambar) }}" alt="Current Image" class="w-full h-full object-cover rounded-2xl">
                                
                                <div id="old-image-badge" class="absolute bottom-3 right-3 bg-slate-900/70 backdrop-blur-md px-2.5 py-1 rounded-md text-[9px] text-slate-300 font-bold select-none">
                                    File Server Aktif
                                </div>
                            @else
                                <div id="old-server-image" class="space-y-1 text-center text-slate-400 pointer-events-none">
                                    <span class="material-symbols-outlined text-4xl">image_not_supported</span>
                                    <p class="text-[10px] font-bold">Belum Ada Foto Terunggah</p>
                                </div>
                            @endif

                            <img id="render-new-edit-preview" class="w-full h-full object-cover hidden absolute inset-0 rounded-3xl border-2 border-[#fd761a]" alt="Staged Preview">

                            <div id="staged-badge" class="absolute top-3 right-3 bg-[#fd761a] text-white px-2.5 py-1 rounded-md text-[9px] font-black uppercase tracking-wider shadow-md hidden animate-pulse">
                                Belum Disimpan
                            </div>

                        </div>

                        <div class="pt-3">
                            <div class="relative flex items-center justify-center w-full">
                                <label class="w-full flex flex-col items-center px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl border border-slate-300 font-bold text-xs uppercase tracking-wider text-center cursor-pointer transition-all">
                                    <span class="inline-flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-sm">add_a_photo</span> Ganti Foto SKU Material
                                    </span>
                                    <input type="file" name="gambar" accept="image/*" class="hidden" onchange="previewEditFoto(event)">
                                </label>
                            </div>
                        </div>

                    </div>

                    <p id="edit-file-name" class="text-center font-mono text-xs text-emerald-600 font-bold truncate hidden"></p>
                </div>

                <div class="pt-4">
                    <button type="submit" 
                            class="w-full py-4 px-6 rounded-2xl bg-[#fd761a] hover:bg-[#e06512] active:scale-[0.99] text-white font-black text-xs uppercase tracking-widest shadow-xl shadow-[#fd761a]/20 transition-all flex items-center justify-center gap-2 group">
                        <span class="material-symbols-outlined text-base group-hover:scale-125 transition-transform">save_as</span>
                        <span>EKSEKUSI PERUBAHAN ORACLE</span>
                    </button>
                </div>

            </div>

        </div>

    </form>

</div>


<script>
    function previewEditFoto(event) {
        const reader = new FileReader();
        const oldImage = document.getElementById('old-server-image');
        const oldBadge = document.getElementById('old-image-badge');
        const newPreview = document.getElementById('render-new-edit-preview');
        const stagedBadge = document.getElementById('staged-badge');
        const textFileName = document.getElementById('edit-file-name');

        reader.onload = function() {
            if(reader.readyState === 2) {
                // Tampilkan preview baru menimpa gambar lama
                newPreview.src = reader.result;
                newPreview.classList.remove('hidden');
                stagedBadge.classList.remove('hidden');
                
                // Sembunyikan elemen lama
                if(oldImage) oldImage.classList.add('opacity-0');
                if(oldBadge) oldBadge.classList.add('hidden');
                
                // Set nama file baru
                textFileName.innerText = '📁 Staged File: ' + event.target.files[0].name;
                textFileName.classList.remove('hidden');
            }
        }

        if(event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        }
    }
</script>

@endsection