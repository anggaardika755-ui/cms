@extends('layouts.admin')

@section('title', 'Pesan Masuk')
@section('header', 'Daftar Pesan Masuk')

@section('content')
<div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h2 class="font-bold text-gray-700">Data Pesan Pelanggan</h2>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-gray-50 text-gray-600 uppercase text-xs">
                <tr>
                    <th class="px-6 py-4">Nama</th>
                    <th class="px-6 py-4">Kontak</th>
                    <th class="px-6 py-4">Subjek</th>
                    <th class="px-6 py-4">Pesan</th>
                    <th class="px-6 py-4">Waktu</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($pesans as $item)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 font-semibold text-gray-800">{{ $item->nama_lengkap }}</td>
                    <td class="px-6 py-4">
                        <div class="text-xs text-gray-500">{{ $item->email }}</div>
                        <div class="text-xs font-bold">{{ $item->nomor_telepon }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 bg-blue-50 text-blue-700 rounded-md text-xs font-medium">
                            {{ $item->subjek }}
                        </span>
                    </td>
                    <td class="px-6 py-4 max-w-xs truncate text-gray-600">{{ $item->pesan }}</td>
                    <td class="px-6 py-4 text-xs text-gray-400">{{ $item->created_at->format('d M Y, H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-gray-400">Tidak ada pesan masuk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection