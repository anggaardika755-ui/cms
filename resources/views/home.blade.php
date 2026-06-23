@extends('layouts.front')

@section('title', 'Beranda | Bangun Mulyo')

@section('content')
<header class="relative pt-32 pb-xl px-lg overflow-hidden">
    
    <div class="absolute inset-0 z-0">
        <img 
            src="{{ asset('storage/' . $hero->image_path) }}" 
            alt="Bangun Mulyo Hero"
            class="w-full h-full object-cover object-center absolute inset-0"
        >
        
        <div class="absolute inset-0 bg-[#183059] bg-opacity-70"></div>
    </div>
    <div class="relative z-10 max-w-container-max mx-auto flex flex-col items-center text-center">
        <h1 class="text-white font-display-lg text-display-lg mb-md max-w-4xl">
            {{ optional($hero)->title ?? 'Solusi Lengkap Kebutuhan Material Bangunan Anda' }}
        </h1>
        
        <p class="text-surface-variant font-body-lg text-body-lg mb-xl max-w-2xl">
            {{ optional($hero)->subtitle ?? 'Menyediakan berbagai material bangunan berkualitas dengan harga kompetitif untuk proyek rumah, gedung, dan konstruksi.' }}
        </p>

        <div class="flex flex-col md:flex-row gap-md">
            <a href="{{ route('produk.front') }}" class="bg-secondary text-white px-xl py-md rounded-xl font-headline-md text-headline-md hover:scale-105 transition-transform shadow-lg inline-block">
                {{ optional($hero)->button_text_1 ?? 'Lihat Produk' }}
            </a>
            <a href="{{ route('kontak') }}" class="border-2 border-white text-white px-xl py-md rounded-xl font-headline-md text-headline-md hover:bg-white hover:text-primary transition-all inline-block">
                {{ optional($hero)->button_text_2 ?? 'Hubungi Kami' }}
            </a>
        </div>
    </div>
</header>
<main class="max-w-container-max mx-auto px-lg py-xl space-y-xl">

    <section class="scroll-reveal visible">
        <div class="flex flex-col items-center mb-xl">
            <h2 class="font-headline-lg text-headline-lg text-primary border-b-4 border-secondary pb-2">Kategori Produk Unggulan</h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-md">
            <div class="group bg-white p-lg rounded-xl shadow-sm border border-outline-variant hover:border-secondary transition-all cursor-pointer flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-surface-container rounded-full flex items-center justify-center mb-md group-hover:bg-secondary-fixed transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-secondary text-3xl" data-icon="architecture">architecture</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface">Semen</span>
            </div>
            
            <div class="group bg-white p-lg rounded-xl shadow-sm border border-outline-variant hover:border-secondary transition-all cursor-pointer flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-surface-container rounded-full flex items-center justify-center mb-md group-hover:bg-secondary-fixed transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-secondary text-3xl" data-icon="grid_on">grid_on</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface">Besi dan Baja</span>
            </div>
            
            <div class="group bg-white p-lg rounded-xl shadow-sm border border-outline-variant hover:border-secondary transition-all cursor-pointer flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-surface-container rounded-full flex items-center justify-center mb-md group-hover:bg-secondary-fixed transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-secondary text-3xl" data-icon="foundation">foundation</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface">Bata & Batako</span>
            </div>
            
            <div class="group bg-white p-lg rounded-xl shadow-sm border border-outline-variant hover:border-secondary transition-all cursor-pointer flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-surface-container rounded-full flex items-center justify-center mb-md group-hover:bg-secondary-fixed transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-secondary text-3xl" data-icon="format_paint">format_paint</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface">Cat Bangunan</span>
            </div>
            
            <div class="group bg-white p-lg rounded-xl shadow-sm border border-outline-variant hover:border-secondary transition-all cursor-pointer flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-surface-container rounded-full flex items-center justify-center mb-md group-hover:bg-secondary-fixed transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-secondary text-3xl" data-icon="roofing">roofing</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface">Atap & Genteng</span>
            </div>
            
            <div class="group bg-white p-lg rounded-xl shadow-sm border border-outline-variant hover:border-secondary transition-all cursor-pointer flex flex-col items-center text-center">
                <div class="w-16 h-16 bg-surface-container rounded-full flex items-center justify-center mb-md group-hover:bg-secondary-fixed transition-colors">
                    <span class="material-symbols-outlined text-primary group-hover:text-secondary text-3xl" data-icon="handyman">handyman</span>
                </div>
                <span class="font-label-md text-label-md text-on-surface">Peralatan</span>
            </div>
        </div>
    </section>

    <section class="scroll-reveal visible">
        <div class="flex justify-between items-end mb-xl">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-primary">Produk Unggulan</h2>
                <p class="text-on-surface-variant">Pilihan terbaik untuk konstruksi kokoh dan tahan lama.</p>
            </div>
            <a class="text-secondary font-label-md text-label-md flex items-center gap-xs hover:underline" href="{{ route('produk.front') }}">
                Lihat Semua <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
            
            <div class="bg-white rounded-xl shadow-sm border border-outline-variant overflow-hidden hover:shadow-md transition-shadow group">
                <div class="h-64 bg-surface-container-high overflow-hidden relative">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Semen Tiga Roda" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7HWXHu5ooEJSfHtDpEjgvZR-IjBcGu9Dnh_6xhxTMoDCgR4FDtifFbmGGbRlzpYoLzQFjbPLFa_zmij7KmAngpuofWV7wOHTOOrfOsDDSk77q9KLCPNqRMzE4qtK2BppyPzL4tV3PjU7TRRkTg7-4XdlkJu2wNKrxDAwKbmxAYEUvZbDKINUz9VZyUfumG3wBDTrieZEVNMsZpypmGOPArrQVv9zpfyQ96OMQ8g_ZXNM0wo0Pn5oUHIfpkoAq8sblMX1qBYb33Dbb"/>
                    <span class="absolute top-md left-md bg-green-100 text-green-800 text-xs font-bold px-2 py-1 rounded">Tersedia</span>
                </div>
                <div class="p-lg">
                    <h3 class="font-headline-md text-headline-md text-primary mb-sm">Semen Tiga Roda 50kg</h3>
                    <div class="flex justify-between items-center mb-md">
                        <span class="text-secondary font-bold text-xl">Rp 65.000</span>
                        <span class="text-label-sm text-on-surface-variant">Stok: 150 Sak</span>
                    </div>
                    <button class="w-full bg-primary text-white py-sm rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-colors">Lihat Detail</button>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-outline-variant overflow-hidden hover:shadow-md transition-shadow group">
                <div class="h-64 bg-surface-container-high overflow-hidden relative">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Cat Dulux" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgjJtSYVUVkR5FbLH6ErbgLLC-PxI_4N-jE2zA4OphVG--uRUrCB7slaZSvXVzl8hUHWMwHrjSuswskU3bTPdixsC04emrfdNkZaIjXtp-yL5UeeV5FjzawfXO6a-7osFtvyVUyywqhCaHvpkevSXPvp7CIb61L_jsxb8AV8jyQU8VaANlTF2EB5KYa197nPuHOJhzZqC2n3aE-dpEEAaDYW-f2PI5OrdAkhjeOeniXkcqyVu61_rnZxAAzz4dWLCbZ63ioGbupjI7"/>
                    <span class="absolute top-md left-md bg-green-100 text-green-800 text-xs font-bold px-2 py-1 rounded">Tersedia</span>
                </div>
                <div class="p-lg">
                    <h3 class="font-headline-md text-headline-md text-primary mb-sm">Cat Dulux Pentalite 5L</h3>
                    <div class="flex justify-between items-center mb-md">
                        <span class="text-secondary font-bold text-xl">Rp 245.000</span>
                        <span class="text-label-sm text-on-surface-variant">Stok: 45 Pail</span>
                    </div>
                    <button class="w-full bg-primary text-white py-sm rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-colors">Lihat Detail</button>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-sm border border-outline-variant overflow-hidden hover:shadow-md transition-shadow group">
                <div class="h-64 bg-surface-container-high overflow-hidden relative">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Besi Beton" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBfkKnvIbVR79C1x0J6eKcbXlzUrh1NSjo_lU_Im4Fy1gmYVHUWMxVGQZ2lD0v20TO9gfh0dOo_RICzccZooIRsklYWOQvUHtyyjFg8s4qeCGw4wivJ1MnZHpySDmRl1vtjRZESCkz2SiXv4O01WtZbCPZYbQy-u7UynlcAlCmE3XW_mTh1HMVZ_moVxMsAH3T85oNrbyShjyNRZojzVA6FoPYmD8tTiigjnGjTR_ohDfF52tuHtO-dD4j4GK5LSoh_m9NT_odemesT"/>
                    <span class="absolute top-md left-md bg-orange-100 text-orange-800 text-xs font-bold px-2 py-1 rounded">Stok Terbatas</span>
                </div>
                <div class="p-lg">
                    <h3 class="font-headline-md text-headline-md text-primary mb-sm">Besi Beton Ulir 12mm</h3>
                    <div class="flex justify-between items-center mb-md">
                        <span class="text-secondary font-bold text-xl">Rp 112.500</span>
                        <span class="text-label-sm text-on-surface-variant">Stok: 24 Batang</span>
                    </div>
                    <button class="w-full bg-primary text-white py-sm rounded-lg font-label-md text-label-md hover:bg-opacity-90 transition-colors">Lihat Detail</button>
                </div>
            </div>
            
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg scroll-reveal visible">
        <div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm flex items-center gap-md border border-outline-variant">
            <div class="bg-primary-fixed p-sm rounded-lg text-primary">
                <span class="material-symbols-outlined" data-icon="verified">verified</span>
            </div>
            <div>
                <h4 class="font-label-md text-label-md font-bold">Produk Berkualitas</h4>
                <p class="text-label-sm text-on-surface-variant">SNI & Standar Industri</p>
            </div>
        </div>
        
        <div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm flex items-center gap-md border border-outline-variant">
            <div class="bg-secondary-fixed p-sm rounded-lg text-secondary">
                <span class="material-symbols-outlined" data-icon="payments">payments</span>
            </div>
            <div>
                <h4 class="font-label-md text-label-md font-bold">Harga Kompetitif</h4>
                <p class="text-label-sm text-on-surface-variant">Terbaik di Pasaran</p>
            </div>
        </div>
        
        <div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm flex items-center gap-md border border-outline-variant">
            <div class="bg-primary-fixed p-sm rounded-lg text-primary">
                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
            </div>
            <div>
                <h4 class="font-label-md text-label-md font-bold">Stok Lengkap</h4>
                <p class="text-label-sm text-on-surface-variant">Siap Kirim Kapanpun</p>
            </div>
        </div>
        
        <div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm flex items-center gap-md border border-outline-variant">
            <div class="bg-secondary-fixed p-sm rounded-lg text-secondary">
                <span class="material-symbols-outlined" data-icon="speed">speed</span>
            </div>
            <div>
                <h4 class="font-label-md text-label-md font-bold">Pelayanan Cepat</h4>
                <p class="text-label-sm text-on-surface-variant">Pengiriman Tepat Waktu</p>
            </div>
        </div>
    </section>

    <section class="flex flex-col lg:flex-row gap-xl items-center scroll-reveal visible">
        <div class="w-full lg:w-1/2 h-[400px] rounded-2xl overflow-hidden shadow-xl">
            <img class="w-full h-full object-cover" alt="Gudang Toko" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoLRqhJRtZBQSrP8oZVsfTcTBCe0kROILQ0oSOAgZ9DrHzvoX4zdORdtF6aLKE-FCdHyK7zUVA5EUx5FvSA55jqLxBvx6S0MYDWHIZmOANjE2w7H45NCoPsy5IHwCgSPTX7ULuGTDtX5dfLMrUtANsWSGvNubo73pDg51I6EXK96_K81rJbFZBtkoO4ReF9X-0ElP04c1yxLTEGwYEiLgS4TXnndBZ6NMCV6iNY5gQPI5N6OoidjGnrzP7YS7NOUbUmG9vxO5DqAGd"/>
        </div>
        
        <div class="w-full lg:w-1/2 space-y-md">
            <span class="text-secondary font-label-md text-label-md tracking-widest uppercase">Profil Toko</span>
            <h2 class="font-headline-lg text-headline-lg text-primary">Membangun Kepercayaan Sejak 2010</h2>
            <p class="text-on-surface-variant body-md text-body-md leading-relaxed">Toko Bangunan Bangun Mulyo telah menjadi mitra terpercaya bagi ribuan kontraktor dan pemilik rumah di wilayah Jawa Barat. Kami berkomitmen menyediakan material bangunan berkualitas tinggi, mulai dari fondasi hingga atap, dengan layanan yang mengutamakan kepuasan pelanggan dan ketepatan waktu.</p>
            <p class="text-on-surface-variant body-md text-body-md leading-relaxed">Kami percaya bahwa bangunan yang kokoh dimulai dari material yang tepat. Itulah mengapa kami hanya bekerja sama dengan merek-merek ternama dan terjamin kualitasnya.</p>
            <button class="bg-primary text-white px-lg py-sm rounded-lg font-label-md text-label-md hover:translate-y-[-2px] transition-transform shadow-md">Selengkapnya</button>
        </div>
    </section>

    <section class="scroll-reveal visible">
        <div class="text-center mb-xl">
            <h2 class="font-headline-lg text-headline-lg text-primary">Apa Kata Mereka?</h2>
            <p class="text-on-surface-variant">Kepuasan pelanggan adalah prioritas utama kami.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
            
            <div class="bg-white p-lg rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between">
                <p class="italic text-on-surface-variant mb-lg font-body-md text-body-md">"Sangat puas belanja di Bangun Mulyo. Harga semen dan besi betonnya paling kompetitif dibanding toko lain. Pengiriman juga sangat cepat sampai ke lokasi proyek."</p>
                <div class="flex items-center gap-md">
                    <img class="w-12 h-12 rounded-full object-cover" alt="Andi" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvHrXKuVbUBhpxo5rym1derbpmih4nRYQvF1IR0gKPX08aG718UTTDGOlAuSVdF0S71vdhterbSgMID1mWhJpH3Q45qezu28RTbIaowzQCGa96FBgPzM4KZq1rVHkDV1L13z51tBSsk74BqFHCgRmVGJrbm4c1UePH3_ur70lWAN8S4gZ2o_9afN2CwIDXJFSRfQnQT0coioUp7GNnXjtvQy4tisoIdxHg4VHZpoVdDglEFQRlPmP4idLZhkNWqTkc1_nabliQlkiP"/>
                    <div>
                        <p class="font-bold text-primary text-label-md">Andi Setiawan</p>
                        <p class="text-label-sm text-on-surface-variant">Kontraktor Sipil</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-lg rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between">
                <p class="italic text-on-surface-variant mb-lg font-body-md text-body-md">"Pilihan catnya lengkap sekali. Adminnya sangat membantu saat saya bingung memilih warna untuk renovasi rumah. Terima kasih Bangun Mulyo!"</p>
                <div class="flex items-center gap-md">
                    <img class="w-12 h-12 rounded-full object-cover" alt="Siska" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCr18hQtO9aD0YN_iss8qCyO2MprL6BkhSKnv7AAUZzafp3CcE8HM43d8lclSzgZxIf6UJUTrHK1Edfb1YFhfW07NR3CJMHS4jH5dNYgovike9uMt4jHgYG42PohjUutUsowddXdVKvcmiLmcY6QcxX0yvJuK3Wr6y82wrXVoxfBeTfvuLKKcxHrRODpBj_QWHN4bbO3lMAm_9dGrLEAq5rU0abULGKzaaOzkfx9PpkLyyOFsl2nxOHVJ1NY6_-DvGwcFBrrJpPmUEm"/>
                    <div>
                        <p class="font-bold text-primary text-label-md">Siska Amelia</p>
                        <p class="text-label-sm text-on-surface-variant">Ibu Rumah Tangga</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-lg rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between">
                <p class="italic text-on-surface-variant mb-lg font-body-md text-body-md">"Stoknya selalu ready meskipun dalam jumlah banyak. Sangat membantu untuk kelancaran proyek gedung kantor saya. Pelayanan admin via WA juga responsif."</p>
                <div class="flex items-center gap-md">
                    <img class="w-12 h-12 rounded-full object-cover" alt="Bambang" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJvI2PMHV1O8Pww3mJ5Wl6auYfZ1RjNW2sGf6JKyABvqZmuH32_eVt4paWI4-NApNIlPU5_-8zpFJD-zqG5hm0Xpeyu5A-CNEM1-Rhia4RxuxLndzHmQVwYylX-7w-JWKAZVSV9mkCZphk_oEWLvIv_0C8ysPImPh-gM56o0Q1mXWBPLezX-KLOrC9cZbif9WU2zC_an9JvFfVTmFBhws6s7711_A0IM8sq0VUhfSOb4Fp8ISJSxTNTbYM6ydbZuUMc8Nl554Nkuy6"/>
                    <div>
                        <p class="font-bold text-primary text-label-md">Bambang Wijaya</p>
                        <p class="text-label-sm text-on-surface-variant">Project Manager</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="bg-primary rounded-3xl p-xl flex flex-col items-center text-center text-white scroll-reveal overflow-hidden relative visible">
        <div class="absolute -top-24 -right-24 w-64 h-64 bg-secondary rounded-full opacity-10"></div>
        <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-white rounded-full opacity-5"></div>
        
        <h2 class="font-headline-lg text-headline-lg mb-md relative z-10">Siap Memenuhi Kebutuhan Material Bangunan Anda?</h2>
        <p class="body-lg text-body-lg mb-xl max-w-2xl text-on-primary-container relative z-10">Dapatkan penawaran harga grosir untuk pembelian partai besar dan pengiriman gratis untuk wilayah tertentu.</p>
        
        <div class="flex flex-col md:flex-row gap-md relative z-10">
            <button class="bg-secondary text-white px-xl py-md rounded-xl font-headline-md text-headline-md hover:scale-105 transition-all shadow-xl">Pesan Sekarang</button>
            <a href="{{ route('kontak') }}" class="bg-white text-primary px-xl py-md rounded-xl font-headline-md text-headline-md hover:bg-surface-container transition-all">Hubungi Admin</a>
        </div>
    </section>

</main>
@endsection