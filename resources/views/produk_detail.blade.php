<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produk->nama_produk }} | Bangun Mulyo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; background-color: #f8fafc; } </style>
</head>
<body class="text-gray-800 flex flex-col min-h-screen">

    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="font-bold text-2xl text-[#1e3a8a]">Bangun Mulyo</div>
            <nav class="hidden md:flex gap-8 text-sm font-medium text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-[#1e3a8a]">Home</a>
                <a href="{{ route('produk.front') }}" class="text-[#fd761a]">Produk</a>
                <a href="{{ route('kontak') }}" class="hover:text-[#1e3a8a]">Kontak</a>
            </nav>
            <a href="{{ route('login') }}" class="bg-[#1e3a8a] text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-opacity-90">Login</a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-grow w-full">
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden">
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="w-full h-full object-cover">
            </div>
            
            <div class="flex flex-col">
                <span class="text-sm text-[#1e3a8a] font-bold uppercase mb-2">{{ $produk->kategori }}</span>
                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $produk->nama_produk }}</h1>
                <p class="text-3xl font-bold text-[#fd761a] mb-6">Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}</p>
                
                <div class="space-y-4 text-gray-600 mb-8">
                    <p>Stok Tersedia: <strong class="text-gray-900">{{ $produk->jumlah_produk }} Unit</strong></p>
                    <p>Produk material berkualitas untuk kebutuhan konstruksi bangunan Anda.</p>
                </div>

                <a href="https://wa.me/6281234567890?text=Halo%20Bangun%20Mulyo,%20saya%20ingin%20bertanya%20mengenai%20produk%20{{ $produk->nama_produk }}" 
                   target="_blank"
                   class="w-full py-4 bg-[#fd761a] text-white rounded-xl font-bold text-center hover:bg-opacity-90 transition shadow-lg">
                    Hubungi via WhatsApp
                </a>
                <a href="{{ route('produk.front') }}" class="mt-4 text-center text-gray-500 hover:text-[#1e3a8a] text-sm">Kembali ke Katalog</a>
            </div>
        </div>
    </main>

    <footer class="bg-gray-200 pt-12 pb-8 text-[#1e3a8a] mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center text-sm text-gray-700">
            &copy; {{ date('Y') }} Toko Bangunan Bangun Mulyo. Seluruh Hak Cipta Dilindungi.
        </div>
    </footer>
</body>
</html>