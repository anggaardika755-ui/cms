<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk | Bangun Mulyo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="text-gray-800 flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="font-bold text-2xl text-[#1e3a8a]">Bangun Mulyo</div>
            
            <nav class="hidden md:flex gap-8 text-sm font-medium text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-[#1e3a8a] transition-colors">Home</a>
                <a href="{{ route('produk.front') }}" class="text-[#fd761a] transition-colors">Produk</a>
                <a href="{{ route('kontak') }}" class="hover:text-[#1e3a8a] transition-colors">Kontak</a>
            </nav>

            <a href="{{ route('login') }}" class="bg-[#1e3a8a] text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-opacity-90 transition shadow-sm">
                Login
            </a>
        </div>
    </header>

    <!-- Info Banner -->
    <div class="bg-[#1e3a8a] text-white py-3">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-sm font-medium text-center sm:text-left">
            Kami menyediakan stok material terlengkap dengan harga kompetitif untuk proyek konstruksi Anda.
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 flex-grow w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($produks as $item)
            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden flex flex-col shadow-sm hover:shadow-md transition-all duration-300 group">
                <div class="aspect-square bg-gray-50 relative overflow-hidden flex items-center justify-center p-4">
                    @if($item->gambar)
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}"/>
                    @else
                        <img class="max-w-full max-h-full object-contain mix-blend-multiply opacity-80" src="https://ui-avatars.com/api/?name={{ urlencode($item->nama_produk) }}&background=e2e8f0&color=1e3a8a&size=400" alt="{{ $item->nama_produk }}"/>
                    @endif
                </div>
                
                <div class="p-5 flex flex-col flex-grow">
                    <span class="text-[11px] text-[#1e3a8a] bg-blue-50 px-2 py-0.5 rounded w-max font-semibold uppercase mb-2">{{ $item->kategori ?? 'Material' }}</span>
                    <h3 class="text-[#191c1e] font-bold text-sm mb-3 line-clamp-2 min-h-[40px]">{{ $item->nama_produk }}</h3>
                    <p class="text-lg font-bold text-gray-900 mt-auto">Rp {{ number_format($item->harga_jual, 0, ',', '.') }}</p>
                    
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        @if($item->jumlah_produk > 0)
                            <a href="{{ route('produk.show', $item->id_produk) }}" class="w-full py-2.5 rounded-lg bg-[#1e3a8a] text-white text-sm font-medium hover:bg-opacity-90 flex items-center justify-center gap-2 transition-all">
                                <span class="material-symbols-outlined text-[18px]">visibility</span> Lihat Detail
                            </a>
                        @else
                            <button class="w-full py-2.5 rounded-lg bg-gray-200 text-gray-400 text-sm font-medium cursor-not-allowed flex items-center justify-center gap-2" disabled>
                                <span class="material-symbols-outlined text-[18px]">block</span> Stok Habis
                            </button>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center text-gray-400">
                <p>Belum ada produk yang tersedia.</p>
            </div>
            @endforelse
        </div>
        <div class="mt-12 flex justify-center">{{ $produks->links() }}</div>
    </main>

    <!-- Newsletter Section (Sesuai Referensi Gambar) -->
    <div class="bg-white py-12 border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h3 class="text-xl font-bold text-[#1e3a8a] mb-2">Dapatkan Update Material Terbaru</h3>
            <p class="text-sm text-gray-600 mb-6">Daftarkan email Anda untuk mendapatkan penawaran harga spesial dan info stok terbaru.</p>
            <form action="#" class="flex flex-col sm:flex-row gap-2 justify-center">
                <input type="email" placeholder="Masukkan alamat email Anda" class="w-full sm:w-80 px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#1e3a8a] outline-none">
                <button type="submit" class="px-6 py-2.5 bg-[#fd761a] text-white rounded-lg text-sm font-bold hover:bg-opacity-90 transition">Berlangganan</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-200 pt-12 pb-8 text-[#1e3a8a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <div class="space-y-4">
                    <h2 class="font-bold text-2xl">Bangun Mulyo</h2>
                    <p class="text-sm text-gray-700 leading-relaxed max-w-sm">Toko material bangunan terlengkap dan terpercaya untuk proyek impian Anda.</p>
                    <div class="space-y-2 text-sm text-gray-700">
                        <div class="flex items-start gap-2"><span class="material-symbols-outlined text-[#fd761a] text-lg">location_on</span><span>Jl. Raya Industri No. 123, Bandung, Jawa Barat</span></div>
                        <div class="flex items-center gap-2"><span class="material-symbols-outlined text-[#fd761a] text-lg">call</span><span>+62 812-3456-7890 (WhatsApp)</span></div>
                        <div class="flex items-center gap-2"><span class="material-symbols-outlined text-[#fd761a] text-lg">mail</span><span>kontak@bangunmulyo.com</span></div>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Navigasi</h3>
                    <ul class="space-y-3 text-sm text-gray-700">
                        <li><a href="{{ route('home') }}" class="hover:text-[#fd761a] transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-[#fd761a] transition">Tentang Kami</a></li>
                        <li><a href="{{ route('produk.front') }}" class="hover:text-[#fd761a] transition">Produk Kami</a></li>
                        <li><a href="#" class="hover:text-[#fd761a] transition">Bantuan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Kebijakan</h3>
                    <ul class="space-y-3 text-sm text-gray-700">
                        <li><a href="#" class="hover:text-[#fd761a] transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-[#fd761a] transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-[#fd761a] transition">Pengembalian Dana</a></li>
                        <li><a href="#" class="hover:text-[#fd761a] transition">Pengiriman</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-300 pt-6 text-center text-sm text-gray-700">
                &copy; {{ date('Y') }} Toko Bangunan Bangun Mulyo. Seluruh Hak Cipta Dilindungi.
            </div>
        </div>
    </footer>
</body>
</html>