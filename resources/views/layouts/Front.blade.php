<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    
    <title>@yield('title', 'Bangun Mulyo | Toko Bangunan Modern & Terpercaya')</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-fixed": "#341100",
                    "on-primary-fixed": "#00164e",
                    "on-surface-variant": "#444651",
                    "on-tertiary-fixed-variant": "#38485d",
                    "on-background": "#191c1e",
                    "primary-fixed": "#dce1ff",
                    "surface-container": "#eceef0",
                    "primary-container": "#1e3a8a",
                    "on-tertiary-fixed": "#0b1c30",
                    "on-secondary-container": "#5c2400",
                    "surface-tint": "#4059aa",
                    "surface-container-high": "#e6e8ea",
                    "error-container": "#ffdad6",
                    "on-error": "#ffffff",
                    "secondary-container": "#fd761a",
                    "on-primary": "#ffffff",
                    "tertiary": "#1b2b3f",
                    "background": "#f7f9fb",
                    "tertiary-fixed": "#d3e4fe",
                    "tertiary-fixed-dim": "#b7c8e1",
                    "secondary-fixed": "#ffdbca",
                    "inverse-surface": "#2d3133",
                    "on-tertiary-container": "#9dadc6",
                    "on-primary-container": "#90a8ff",
                    "primary": "#1e3a8a",
                    "inverse-on-surface": "#eff1f3",
                    "surface": "#f7f9fb",
                    "on-error-container": "#93000a",
                    "error": "#ba1a1a",
                    "tertiary-container": "#314156",
                    "surface-variant": "#e0e3e5",
                    "on-surface": "#191c1e",
                    "outline-variant": "#c5c5d3",
                    "secondary-fixed-dim": "#ffb690",
                    "inverse-primary": "#b6c4ff",
                    "primary-fixed-dim": "#b6c4ff",
                    "outline": "#757682",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed-variant": "#783200",
                    "surface-dim": "#d8dadc",
                    "surface-container-highest": "#e0e3e5",
                    "surface-bright": "#f7f9fb",
                    "on-primary-fixed-variant": "#264191",
                    "on-secondary": "#ffffff",
                    "surface-container-low": "#f2f4f6",
                    "on-tertiary": "#ffffff",
                    "secondary": "#fd761a"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "base": "4px",
                    "lg": "24px",
                    "xs": "4px",
                    "container-max": "1280px",
                    "md": "16px",
                    "sm": "8px",
                    "gutter": "24px",
                    "xl": "48px"
            },
            "fontFamily": {
                    "headline-lg-mobile": ["Inter"],
                    "body-lg": ["Inter"],
                    "display-lg": ["Inter"],
                    "headline-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "label-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-md": ["Inter"]
            },
            "fontSize": {
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .hero-gradient {
            background: linear-gradient(rgba(30, 58, 138, 0.85), rgba(30, 58, 138, 0.6)), url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        .scroll-reveal { opacity: 0; transform: translateY(20px); transition: all 0.6s ease-out; }
        .scroll-reveal.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>

<body class="bg-surface text-on-surface">

<nav class="fixed top-0 left-0 right-0 z-50 bg-white/85 backdrop-blur-md border-b border-slate-100/80 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-xl bg-[#183059] flex items-center justify-center text-white shadow-md shadow-[#183059]/25 group-hover:scale-105 transition-all duration-300">
                    <span class="material-symbols-outlined text-amber-400 text-2xl">domain</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-black text-xl tracking-tight text-[#183059] leading-none">BANGUN MULYO</span>
                    <span class="text-[9px] font-extrabold tracking-widest text-amber-600 uppercase mt-1">Building Materials</span>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-1 bg-slate-100/80 p-1.5 rounded-full border border-slate-200/60 shadow-inner">
                
                <a href="{{ url('/') }}" 
                   class="px-5 py-2 rounded-full text-xs font-bold transition-all duration-200 {{ request()->is('/') ? 'bg-white text-[#183059] shadow-sm' : 'text-slate-500 hover:text-[#183059]' }}">
                   Beranda
                </a>

                <a href="{{ route('produk.front') }}" 
                   class="px-5 py-2 rounded-full text-xs font-bold transition-all duration-200 {{ request()->is('produk*') ? 'bg-white text-[#183059] shadow-sm' : 'text-slate-500 hover:text-[#183059]' }}">
                   Katalog Produk
                </a>

                <a href="{{ route('profil') }}" 
                   class="px-5 py-2 rounded-full text-xs font-bold transition-all duration-200 {{ request()->is('profil*') ? 'bg-white text-[#183059] shadow-sm' : 'text-slate-500 hover:text-[#183059]' }}">
                   Profil Toko
                </a>

                <a href="{{ route('kontak') }}" 
                   class="px-5 py-2 rounded-full text-xs font-bold transition-all duration-200 {{ request()->is('kontak*') ? 'bg-white text-[#183059] shadow-sm' : 'text-slate-500 hover:text-[#183059]' }}">
                   Kontak Kami
                </a>

            </div>

            <div class="hidden md:flex items-center gap-3">
                <a href="https://wa.me/6281234567890" target="_blank" 
                   class="flex items-center gap-1.5 px-4 py-2.5 rounded-xl bg-emerald-50 text-emerald-700 border border-emerald-200/80 hover:bg-emerald-500 hover:text-white font-bold text-xs transition-all shadow-sm group">
                    <span class="material-symbols-outlined text-base text-emerald-600 group-hover:text-white transition-colors">call</span>
                    <span>CS Order</span>
                </a>

                @auth
                    <a href="{{ url('/dashboard') }}" 
                       class="flex items-center gap-2 bg-[#183059] text-white px-5 py-2.5 rounded-xl font-bold text-xs hover:bg-[#112240] shadow-lg shadow-[#183059]/20 transition-all active:scale-95">
                        <span class="material-symbols-outlined text-amber-400 text-sm">dashboard</span>
                        <span>Dashboard</span>
                    </a>
                @else
                    <a href="{{ route('login') }}" 
                       class="flex items-center gap-1.5 bg-slate-800 text-slate-200 px-5 py-2.5 rounded-xl font-bold text-xs hover:bg-[#183059] hover:text-white transition-all active:scale-95">
                        <span class="material-symbols-outlined text-sm">lock</span>
                        <span>Staf Login</span>
                    </a>
                @endauth
            </div>

            <div class="flex md:hidden items-center gap-2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-3 py-1.5 rounded-lg bg-[#183059] text-amber-400 text-xs font-bold">Panel</a>
                @endauth
                <button id="nav-toggle" type="button" class="p-2 rounded-xl text-slate-600 hover:bg-slate-100 focus:outline-none">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>

        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-2xl border-b border-slate-200 px-6 pt-3 pb-6 space-y-2.5 shadow-2xl animate-fade-in-down">
        <a href="{{ url('/') }}" class="block px-4 py-3 rounded-xl text-sm font-bold {{ request()->is('/') ? 'bg-[#183059] text-white' : 'text-slate-600 hover:bg-slate-50' }}">Beranda</a>
        <a href="{{ route('produk.front') }}" class="block px-4 py-3 rounded-xl text-sm font-bold {{ request()->is('produk*') ? 'bg-[#183059] text-white' : 'text-slate-600 hover:bg-slate-50' }}">Katalog Produk</a>
        <a href="{{ route('profil') }}" class="block px-4 py-3 rounded-xl text-sm font-bold {{ request()->is('profil*') ? 'bg-[#183059] text-white' : 'text-slate-600 hover:bg-slate-50' }}">Profil Toko</a>
        <a href="{{ route('kontak') }}" class="block px-4 py-3 rounded-xl text-sm font-bold {{ request()->is('kontak*') ? 'bg-[#183059] text-white' : 'text-slate-600 hover:bg-slate-50' }}">Kontak Kami</a>
        
        <div class="pt-4 border-t border-slate-100 flex flex-col gap-2">
            <a href="https://wa.me/6281234567890" target="_blank" class="w-full text-center py-3 rounded-xl bg-[#25D366] text-white font-bold text-xs shadow-md">
                💬 Chat WhatsApp CS
            </a>
            @guest
                <a href="{{ route('login') }}" class="w-full text-center py-3 rounded-xl bg-slate-100 text-slate-700 font-bold text-xs">
                    🔒 Staf Internal Login
                </a>
            @endguest
        </div>
    </div>
</nav>

<script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>

<!-- AREA KONTEN DINAMIS -->
<div class="main-content">
    @yield('content')
</div>

<footer class="bg-surface-container-highest dark:bg-on-tertiary-fixed text-on-surface border-t border-outline-variant">
    <div class="w-full pt-xl pb-lg px-lg flex flex-col md:flex-row justify-between gap-xl max-w-container-max mx-auto">
        
        <div class="md:max-w-sm space-y-md">
            <div class="font-headline-md text-headline-md font-bold text-primary dark:text-secondary-fixed-dim">Bangun Mulyo</div>
            <p class="font-body-md text-body-md text-on-surface-variant">Toko material bangunan terlengkap dan terpercaya untuk proyek impian Anda. Kualitas terjamin, harga bersaing.</p>
            <div class="space-y-sm">
                <div class="flex items-center gap-sm">
                    <span class="material-symbols-outlined text-secondary" data-icon="location_on">location_on</span>
                    <span class="text-label-sm">Jl. Raya Industri No. 123, Bandung, Jawa Barat</span>
                </div>
                <div class="flex items-center gap-sm">
                    <span class="material-symbols-outlined text-secondary" data-icon="phone_iphone">phone_iphone</span>
                    <span class="text-label-sm">+62 838-3142-8699 (WhatsApp)</span>
                </div>
                <div class="flex items-center gap-sm">
                    <span class="material-symbols-outlined text-secondary" data-icon="mail">mail</span>
                    <span class="text-label-sm">kontak@bangunmulyo.com</span>
                </div>
            </div>
        </div>
        
        <div class="grid grid-cols-2 gap-xl">
            <div>
                <h5 class="font-headline-md text-headline-md text-primary mb-md">Navigasi</h5>
                <ul class="space-y-sm">
                    <li><a class="text-on-surface-variant hover:text-secondary transition-all font-label-sm text-label-sm" href="{{ route('home') }}">Beranda</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-all font-label-sm text-label-sm" href="#">Tentang Kami</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-all font-label-sm text-label-sm" href="{{ route('produk.front') }}">Produk Kami</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-all font-label-sm text-label-sm" href="{{ route('kontak') }}">Bantuan</a></li>
                </ul>
            </div>
            
            <div>
                <h5 class="font-headline-md text-headline-md text-primary mb-md">Kebijakan</h5>
                <ul class="space-y-sm">
                    <li><a class="text-on-surface-variant hover:text-secondary transition-all font-label-sm text-label-sm" href="#">Kebijakan Privasi</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-all font-label-sm text-label-sm" href="#">Syarat & Ketentuan</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-all font-label-sm text-label-sm" href="#">Pengembalian Dana</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-all font-label-sm text-label-sm" href="#">Pengiriman</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="max-w-container-max mx-auto px-lg py-md border-t border-outline-variant/30 text-center">
        <p class="text-label-sm text-on-surface-variant">© 2024 Toko Bangunan Bangun Mulyo. Seluruh Hak Cipta Dilindungi.</p>
    </div>
</footer>

<script>
        // Logika untuk menampilkan elemen secara halus ketika discroll (Scroll Reveal)
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));

        // Logika untuk menggulir halaman dengan mulus saat mengklik link (Smooth Scrolling)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                if (this.getAttribute('href') !== "#") {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Logika untuk Navigasi Dinamis (Efek bayangan saat scroll & Menu Mobile)
        const navbar = document.getElementById('navbar');
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        // Menambahkan bayangan pada navbar ketika halaman digulir ke bawah
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });

        // Menampilkan atau menyembunyikan menu dropdown pada tampilan mobile
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            
            // Mengganti ikon hamburger menjadi ikon 'close' (silang) saat menu terbuka
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.textContent = 'menu';
            } else {
                menuIcon.textContent = 'close';
            }
        });
</script>

</body>
</html>