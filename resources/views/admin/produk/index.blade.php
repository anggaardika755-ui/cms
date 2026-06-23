@extends('layouts.admin')

@section('title', 'Kelola Produk')
@section('header', 'Kelola Produk')

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-[#e0e3e5] overflow-hidden">
    
    <div class="p-6 border-b border-[#e0e3e5] flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="relative w-full md:w-64">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-lg">search</span>
            <input type="text" placeholder="Cari produk..." class="w-full pl-10 pr-4 py-2 border border-[#c5c5d3] rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none">
        </div>
        
        <a href="{{ route('admin.produk.create') }}" class="w-full md:w-auto bg-[#1e3a8a] text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-opacity-90 flex items-center justify-center gap-2 transition-all shadow-md active:scale-95">
            <span class="material-symbols-outlined text-[18px]">add</span> Tambah Produk Baru
        </a>
    </div>

    @if(session('success'))
    <div class="mx-6 mt-4 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg text-sm flex items-center gap-2">
        <span class="material-symbols-outlined text-lg">check_circle</span>
        {{ session('success') }}
    </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-[#f7f9fb] text-[#444651] uppercase text-xs font-semibold">
                <tr>
                    <th class="px-6 py-4">Produk</th>
                    <th class="px-6 py-4">Kategori</th>
                    <th class="px-6 py-4">Harga Jual</th>
                    <th class="px-6 py-4">Stok</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#e0e3e5]">
                
                @forelse($produks as $item)
                <tr class="hover:bg-[#f7f9fb] transition-colors">
                    
                    <td class="px-6 py-4 flex items-center gap-3">
                        <div class="w-10 h-10 bg-gray-100 rounded object-cover overflow-hidden flex-shrink-0 border border-gray-200 flex items-center justify-center">
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="w-full h-full object-cover">
                            @else
                                <span class="material-symbols-outlined text-gray-400 text-xl">image</span>
                            @endif
                        </div>
                        <div>
                            <div class="font-medium text-[#191c1e] truncate max-w-[200px]">{{ $item->nama_produk }}</div>
                            <div class="text-xs text-gray-400 font-mono">#{{ $item->id_produk }}</div>
                        </div>
                    </td>
                    
                    <td class="px-6 py-4">
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded">
                            {{ $item->kategori ?? 'Uncategorized' }}
                        </span>
                    </td>
                    
                    <td class="px-6 py-4 font-medium text-[#fd761a]">
                        Rp {{ number_format($item->harga_jual, 0, ',', '.') }}
                    </td>
                    
                    <td class="px-6 py-4">
                        @if($item->jumlah_produk > 10)
                            <span class="px-2.5 py-1 bg-green-100 text-green-800 rounded text-xs font-medium">{{ $item->jumlah_produk }}</span>
                        @elseif($item->jumlah_produk > 0)
                            <span class="px-2.5 py-1 bg-orange-100 text-orange-800 rounded text-xs font-medium">{{ $item->jumlah_produk }}</span>
                        @else
                            <span class="px-2.5 py-1 bg-red-100 text-red-800 rounded text-xs font-medium">Habis</span>
                        @endif
                    </td>
                    
                    <td class="px-6 py-4 text-center space-x-1">
                        
                        <a href="{{ route('admin.produk.edit', $item->id_produk) }}" class="text-gray-500 hover:text-[#1e3a8a] p-1 inline-block transition-colors" title="Edit Produk">
                            <span class="material-symbols-outlined text-[20px]">edit</span>
                        </a>
                        
                        <form action="{{ route('admin.produk.destroy', $item->id_produk) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini dari database?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-gray-500 hover:text-red-600 p-1 transition-colors" title="Hapus Produk">
                                <span class="material-symbols-outlined text-[20px]">delete</span>
                            </button>
                        </form>

                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                        <span class="material-symbols-outlined text-4xl text-gray-300 mb-2">inventory_2</span>
                        <p class="text-sm font-medium">Belum ada data produk di database Oracle Anda.</p>
                        <p class="text-xs text-gray-400 mt-1">Silakan klik tombol "Tambah Produk Baru" untuk mengisi inventaris.</p>
                    </td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
    
    <div class="p-4 border-t border-[#e0e3e5]">
        {{ $produks->links() }}
    </div>
</div>
@endsection