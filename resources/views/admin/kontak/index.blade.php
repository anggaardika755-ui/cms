@extends('layouts.admin')

@section('title', 'Pesan & Penawaran Masuk')
@section('header', 'Arsip Kotak Masuk Pelanggan')

@section('content')
<div class="space-y-6">

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-[11px] font-black tracking-widest uppercase text-slate-400 block">Total Tiket Masuk</span>
                {{-- Perbaikan: Menggunakan total() agar membaca seluruh isi database, bukan cuma halaman aktif --}}
                <h3 class="text-3xl font-black text-[#183059]">{{ method_exists($pesans, 'total') ? $pesans->total() : $pesans->count() }} Pesan</h3>
            </div>
            <div class="p-3.5 rounded-2xl bg-blue-50 text-[#183059]">
                <span class="material-symbols-outlined text-2xl">mark_email_unread</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] flex items-center justify-between">
            <div class="space-y-1">
                <span class="text-[11px] font-black tracking-widest uppercase text-slate-400 block">Prioritas Penawaran</span>
                <h3 class="text-3xl font-black text-[#fd761a]">
                    {{ collect($pesans->items())->where('subjek', 'Penawaran Harga')->count() }} Proyek
                </h3>
            </div>
            <div class="p-3.5 rounded-2xl bg-amber-50 text-[#fd761a]">
                <span class="material-symbols-outlined text-2xl">request_quote</span>
            </div>
        </div>

        <div class="bg-gradient-to-br from-[#183059] to-[#0f1f3a] text-white p-6 rounded-3xl shadow-xl flex items-center justify-between border border-white/10">
            <div class="space-y-1">
                <span class="text-[11px] font-black tracking-widest uppercase text-amber-400 block">SOP TARGET CS</span>
                <h3 class="text-sm font-bold text-slate-200">Respon < 15 Menit</h3>
            </div>
            <div class="p-3 rounded-2xl bg-white/10 text-amber-400">
                <span class="material-symbols-outlined text-2xl">support_agent</span>
            </div>
        </div>
    </div>


    <div class="bg-white rounded-3xl border border-slate-200/80 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] overflow-hidden">
        
        <div class="p-6 sm:p-8 border-b border-slate-100 flex flex-col sm:flex-row justify-between sm:items-center gap-4 bg-slate-50/50">
            <div>
                <h2 class="font-black text-slate-800 text-lg">Pesan Dari Formulir Digital</h2>
                <p class="text-xs text-slate-400">Calon pembeli yang mengirimkan pertanyaan dari halaman kontak publik</p>
            </div>
            <span class="text-xs font-mono font-bold bg-[#183059] text-amber-400 px-3 py-1.5 rounded-xl w-max self-start sm:self-auto">
                ● Live Database Feed
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                
                <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest border-b border-slate-100 select-none">
                    <tr>
                        <th class="px-6 py-4.5">Calon Pembeli / Mandor</th>
                        <th class="px-6 py-4.5">Klasifikasi Kebutuhan</th>
                        <th class="px-6 py-4.5">Isi Pesan / Rincian Material</th>
                        <th class="px-6 py-4.5">Waktu Masuk</th>
                        <th class="px-6 py-4.5 text-center">Tindakan Cepat</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-slate-100 text-xs sm:text-sm font-semibold text-slate-700">
                    @forelse($pesans as $item)
                    <tr class="hover:bg-slate-50/80 transition-colors group">
                        
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3.5">
                                <img class="w-10 h-10 rounded-full object-cover ring-2 ring-[#183059]/10 flex-shrink-0" 
                                     src="https://ui-avatars.com/api/?name={{ urlencode($item->nama_lengkap) }}&background=183059&color=ffffff" alt="Avatar">
                                <div class="space-y-0.5">
                                    <span class="font-extrabold text-slate-900 block group-hover:text-[#183059] transition-colors">
                                        {{ $item->nama_lengkap }}
                                    </span>
                                    <span class="text-[11px] font-mono font-bold text-emerald-600 block">
                                        📞 {{ $item->nomor_telepon }}
                                    </span>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            @if($item->subjek == 'Penawaran Harga')
                                <span class="px-3 py-1 rounded-full bg-amber-100 text-amber-900 border border-amber-300 text-[10px] font-black uppercase tracking-wider shadow-2xs">
                                    📋 Minta RAB Proyek
                                </span>
                            @elseif($item->subjek == 'Kerjasama Proyek')
                                <span class="px-3 py-1 rounded-full bg-purple-100 text-purple-900 border border-purple-300 text-[10px] font-black uppercase tracking-wider shadow-2xs">
                                    🏢 Tender Besar
                                </span>
                            @else
                                <span class="px-3 py-1 rounded-full bg-slate-100 text-slate-600 border border-slate-200 text-[10px] font-bold">
                                    {{ $item->subjek ?? 'Informasi Stok' }}
                                </span>
                            @endif
                        </td>

                        <td class="px-6 py-4">
                            <div class="max-w-[280px] sm:max-w-xs text-slate-600 font-normal leading-relaxed">
                                <p class="line-clamp-2" title="{{ $item->pesan }}">{{ $item->pesan }}</p>
                                <span class="text-[10px] font-mono text-slate-400 block mt-1 truncate">✉️ {{ $item->email }}</span>
                            </div>
                        </td>

                        <td class="px-6 py-4 font-mono text-xs text-slate-400">
                            {{ optional($item->created_at)->format('d M Y - H:i') ?? 'Baru Saja' }} WIB
                        </td>

                        <td class="px-6 py-4 text-center">
                            
                            @php
                                $waPhone = preg_replace('/[^0-9]/', '', $item->nomor_telepon);
                                if (str_starts_with($waPhone, '0')) { $waPhone = '62' . substr($waPhone, 1); }
                                $templateBalasan = "Halo%20Pak/Bu%20" . urlencode($item->nama_lengkap) . ",%20kami%20dari%20Admin%20Toko%20Bangunan%20*Bangun%20Mulyo*%20menjawab%20pesan%20website%20Anda%20mengenai%20*".$item->subjek."*.%0A%0ABisa%20dibantu%20informasi%20detail%20kebutuhan%20atau%20alamat%20lengkap%20proyeknya?";
                            @endphp

                            <div class="inline-flex items-center justify-center gap-1 bg-slate-100/80 p-1 rounded-2xl border border-slate-200/80 shadow-2xs">
                                
                                <a href="{{ route('admin.kontak.show', $item->id) }}" 
                                   class="p-2 rounded-xl text-slate-500 hover:text-[#183059] hover:bg-white hover:shadow-xs transition-all" 
                                   title="Baca Isi Surat Penuh">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </a>

                                <a href="https://wa.me/{{ $waPhone }}?text={{ $templateBalasan }}" target="_blank"
                                   class="px-3 py-1.5 rounded-xl bg-[#25D366] hover:bg-[#20ba5a] text-white font-black text-xs tracking-wider uppercase transition-all flex items-center gap-1 shadow-xs active:scale-95"
                                   title="Balas via WhatsApp Web">
                                    <span class="material-symbols-outlined text-[16px]">chat</span>
                                    <span class="hidden xl:inline">Balas WA</span>
                                </a>

                                <form action="{{ route('admin.kontak.destroy', $item->id) }}" method="POST" class="inline-block m-0"
                                      onsubmit="return confirm('⚠️ PERINGATAN:\n\nAnda yakin ingin memusnahkan pesan dari [ {{ addslashes($item->nama_lengkap) }} ] secara permanen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="p-2 rounded-xl text-slate-400 hover:text-rose-600 hover:bg-rose-50 transition-all cursor-pointer block" 
                                            title="Hapus Arsip Pesan">
                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                    </button>
                                </form>

                            </div>

                        </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-24 text-center bg-slate-50/50">
                            <div class="max-w-sm mx-auto space-y-3">
                                <span class="material-symbols-outlined text-6xl text-slate-300">inbox</span>
                                <h3 class="font-black text-slate-700 text-base">Kotak Masuk Bersih</h3>
                                <p class="text-xs text-slate-400 leading-relaxed">Belum ada calon pembeli atau kontraktor yang mengirimkan pertanyaan melalui formulir digital di halaman depan.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

        @if(method_exists($pesans, 'hasPages') && $pesans->hasPages())
        <div class="p-6 border-t border-slate-100 bg-slate-50/50">
            {{ $pesans->links() }}
        </div>
        @endif

    </div>

</div>
@endsection