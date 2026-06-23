@extends('layouts.admin')

@section('title', 'Kontrol Halaman Depan')
@section('header', 'Manajemen Banner Utama (Hero)')

@section('content')
<div class="max-w-4xl bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
    
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-r-lg font-medium">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-r-lg">
            <p class="font-bold">Gagal menyimpan perubahan:</p>
            <ul class="list-disc ml-5 text-sm mt-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.hero.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-bold text-gray-700 mb-1">Judul Slogan Utama</label>
            <input type="text" name="title" value="{{ old('title', optional($hero)->title) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            <span class="text-xs text-gray-400">Muncul dalam ukuran teks paling besar di tengah web.</span>
        </div>

        <div>
            <label class="block text-sm font-bold text-gray-700 mb-1">Sub-judul / Teks Deskripsi</label>
            <textarea name="subtitle" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>{{ old('subtitle', optional($hero)->subtitle) }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Teks Tombol Kiri (Aksi)</label>
                <input type="text" name="button_text_1" value="{{ old('button_text_1', optional($hero)->button_text_1) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-1">Teks Tombol Kanan (Alternatif)</label>
                <input type="text" name="button_text_2" value="{{ old('button_text_2', optional($hero)->button_text_2) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>
        </div>

        <div class="p-4 bg-gray-50 rounded-xl border border-dashed border-gray-300">
            <label class="block text-sm font-bold text-gray-700 mb-1">Gambar Latar Belakang (Background)</label>
            <input type="file" name="image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            <span class="block text-xs text-gray-400 mt-2">*Biarkan kosong jika tidak ingin mengganti gambar saat ini.</span>

            @if(optional($hero)->image_path)
                <div class="mt-4 pt-4 border-t border-gray-200">
                    <p class="text-xs text-gray-500 font-medium mb-2">Gambar yang sedang tayang:</p>
                    <img src="{{ asset('storage/' . $hero->image_path) }}" class="h-28 rounded-lg object-cover border border-gray-300 shadow-sm">
                </div>
            @endif
        </div>

        <button type="submit" class="w-full md:w-auto px-8 py-3 bg-[#1e3a8a] hover:bg-blue-800 text-white font-bold rounded-xl shadow-lg transition-all hover:shadow-blue-200">
            Simpan & Tayangkan ke Web
        </button>
    </form>
</div>
@endsection