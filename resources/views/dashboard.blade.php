@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header', 'Dashboard Inventaris')

@section('content')
<div class="space-y-8">
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-blue-100 text-[#1e3a8a] rounded-lg">
                    <span class="material-symbols-outlined">inventory_2</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Total Material</p>
                    <h3 class="text-2xl font-bold">{{ $totalProduk ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-orange-100 text-orange-600 rounded-lg">
                    <span class="material-symbols-outlined">warning</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Perlu Restock</p>
                    <h3 class="text-2xl font-bold">{{ $stokMenipis ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-red-100 text-red-600 rounded-lg">
                    <span class="material-symbols-outlined">block</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Stok Habis</p>
                    <h3 class="text-2xl font-bold">{{ $stokHabis ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-green-100 text-green-600 rounded-lg">
                    <span class="material-symbols-outlined">category</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Kategori Aktif</p>
                    <h3 class="text-2xl font-bold">{{ $totalKategori ?? 0 }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex justify-between items-center">
            <h2 class="font-bold text-gray-700">Material Segera Habis (< 5 unit)</h2>
            <a href="{{ route('admin.produk.index') }}" class="text-sm text-[#1e3a8a] hover:underline">Lihat Semua</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4">Nama Produk</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Sisa Stok</th>
                        <th class="px-6 py-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($produkKritis as $item)
                    <tr>
                        <td class="px-6 py-4 font-medium">{{ $item->nama_produk }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $item->kategori }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-red-100 text-red-700 rounded-full text-xs font-bold">{{ $item->jumlah_produk }}</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('admin.produk.edit', $item->id_produk) }}" class="text-[#1e3a8a] hover:underline">Update</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-gray-400">Tidak ada material yang kritis.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection