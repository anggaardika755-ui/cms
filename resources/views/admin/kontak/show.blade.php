@extends('layouts.admin')

@section('title', 'Detail Pesan Masuk')
@section('header', 'Informasi Detail Formulir Digital')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between bg-white p-6 rounded-3xl border border-slate-100 shadow-sm">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.kontak.index') }}" class="p-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-600 transition-all">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
            <div>
                <h2 class="text-xl font-black text-[#183059]">Baca Pesan</h2>
                <p class="text-xs text-slate-400">ID Dokumen: #BM-MSG-{{ str_pad($pesan->id, 4, '0', STR_PAD_LEFT) }}</p>
            </div>
        </div>

        <form action="{{ route('admin.kontak.destroy', $pesan->id) }}" method="POST" onsubmit="return confirm('Hapus pesan ini secara permanen?')">
            @csrf @method('DELETE')
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white font-bold text-xs uppercase tracking-widest transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-sm">delete</span> Hapus Arsip
            </button>
        </form>
    </div>

    <div class="bg-white rounded-3xl border border-slate-100 shadow-xl overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-12">
            
            <div class="md:col-span-4 bg-slate-50 p-8 border-r border-slate-100 space-y-8">
                <div class="text-center space-y-3">
                    <img class="w-24 h-24 rounded-3xl mx-auto object-cover ring-4 ring-white shadow-lg" 
                         src="https://ui-avatars.com/api/?name={{ urlencode($pesan->nama_lengkap) }}&background=183059&color=ffffff&size=200" alt="Avatar">
                    <div>
                        <h3 class="font-black text-[#183059] text-lg">{{ $pesan->nama_lengkap }}</h3>
                        <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-[10px] font-black uppercase tracking-wider">
                            {{ $pesan->subjek }}
                        </span>
                    </div>
                </div>

                <div class="space-y-4 pt-4 border-t border-slate-200">
                    <div class="space-y-1">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Alamat Email</span>
                        <p class="text-sm font-bold text-slate-700 truncate">{{ $pesan->email }}</p>
                    </div>
                    <div class="space-y-1">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Nomor Telepon</span>
                        <p class="text-sm font-black text-emerald-600 font-mono">{{ $pesan->nomor_telepon }}</p>
                    </div>
                    <div class="space-y-1">
                        <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Waktu Kirim</span>
                        <p class="text-sm font-medium text-slate-500">{{ $pesan->created_at->format('d M Y, H:i') }} WIB</p>
                    </div>
                </div>

                @php
                    $waPhone = preg_replace('/[^0-9]/', '', $pesan->nomor_telepon);
                    if (str_starts_with($waPhone, '0')) { $waPhone = '62' . substr($waPhone, 1); }
                    $waText = "Halo Pak/Bu " . urlencode($pesan->nama_lengkap) . ", saya Admin Bangun Mulyo ingin menanggapi pesan Anda mengenai " . urlencode($pesan->subjek);
                @endphp

                <a href="https://wa.me/{{ $waPhone }}?text={{ $waText }}" target="_blank"
                   class="w-full py-4 bg-[#25D366] hover:bg-[#1fa34a] text-white rounded-2xl font-black text-xs uppercase tracking-widest text-center shadow-lg shadow-emerald-200 transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">chat</span> Balas via WA
                </a>
            </div>

            <div class="md:col-span-8 p-8 sm:p-12 space-y-6">
                <div class="flex items-center gap-2 text-slate-400">
                    <span class="material-symbols-outlined text-sm">panning_alt</span>
                    <span class="text-[10px] font-black uppercase tracking-[0.2em]">Isi Pesan / Lampiran Teks</span>
                </div>
                
                <div class="relative">
                    <span class="absolute -left-6 -top-4 text-6xl text-slate-100 font-serif">“</span>
                    <p class="text-slate-700 leading-relaxed text-lg italic whitespace-pre-line relative z-10">
                        {{ $pesan->pesan }}
                    </p>
                    <span class="absolute -right-2 -bottom-4 text-6xl text-slate-100 font-serif">”</span>
                </div>

                <div class="pt-12 border-t border-slate-100 flex items-center justify-between italic text-[11px] text-slate-400">
                    <span>Sistem Pengarsipan Bangun Mulyo V.2</span>
                    <span>Telah diverifikasi oleh Oracle DB</span>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection