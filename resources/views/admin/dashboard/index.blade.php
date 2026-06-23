@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header', 'Dashboard Inventaris')

@section('content')
<div class="space-y-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col hover:shadow-md transition-shadow">
            <span class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Total Material</span>
            <h3 class="text-3xl font-extrabold text-[#1e3a8a]">{{ $totalProduk ?? 0 }}</h3>
        </div>
        
        <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col hover:shadow-md transition-shadow">
            <span class="text-xs font-bold text-orange-400 uppercase tracking-wider mb-1">Perlu Restock</span>
            <h3 class="text-3xl font-extrabold text-orange-600">{{ $stokMenipis ?? 0 }}</h3>
        </div>
        
        <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col hover:shadow-md transition-shadow">
            <span class="text-xs font-bold text-red-400 uppercase tracking-wider mb-1">Stok Habis</span>
            <h3 class="text-3xl font-extrabold text-red-600">{{ $stokHabis ?? 0 }}</h3>
        </div>
        
        <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex flex-col hover:shadow-md transition-shadow">
            <span class="text-xs font-bold text-green-400 uppercase tracking-wider mb-1">Total Kategori</span>
            <h3 class="text-3xl font-extrabold text-green-600">{{ $totalKategori ?? 0 }}</h3>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-50 flex justify-between items-center bg-gray-50/50">
            <h2 class="font-bold text-gray-800 flex items-center gap-2">
                <span class="material-symbols-outlined text-[#1e3a8a]">error</span>
                Material Kritis (Segera Restock)
            </h2>
            <a href="{{ route('admin.produk.index') }}" class="text-xs font-bold text-[#1e3a8a] bg-[#1e3a8a]/10 px-3 py-1.5 rounded-full hover:bg-[#1e3a8a]/20 transition">
                Kelola Semua
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-white text-gray-400 text-[10px] uppercase tracking-widest">
                    <tr>
                        <th class="px-6 py-4">Nama Produk</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4 text-right">Sisa Stok</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm">
                    @forelse($produkKritis ?? [] as $item)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-semibold text-gray-700">{{ $item->nama_produk }}</td>
                        <td class="px-6 py-4 text-gray-500">{{ $item->kategori }}</td>
                        <td class="px-6 py-4 text-right">
                            <span class="inline-block px-3 py-1 bg-red-50 text-red-600 rounded-lg font-bold">
                                {{ $item->jumlah_produk }} unit
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-10 text-center text-gray-400">
                            Semua stok dalam kondisi aman.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection