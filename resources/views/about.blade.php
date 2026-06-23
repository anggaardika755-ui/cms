<!DOCTYPE html><html class="light" lang="id"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Tentang Kami - Bangun Mulyo</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&amp;family=Source+Serif+4:ital,opsz,wght@0,8..60,400..700;1,8..60,400..700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed": "#b0f0d6",
                        "inverse-surface": "#2d3133",
                        "on-surface-variant": "#45464d",
                        "on-surface": "#191c1e",
                        "primary-container": "#131b2e",
                        "outline-variant": "#c6c6cd",
                        "on-tertiary": "#ffffff",
                        "on-primary-fixed": "#131b2e",
                        "primary": "#000000",
                        "tertiary-container": "#331200",
                        "secondary": "#2b6954",
                        "secondary-container": "#adedd3",
                        "inverse-primary": "#bec6e0",
                        "on-error": "#ffffff",
                        "surface-tint": "#565e74",
                        "surface-variant": "#e0e3e5",
                        "tertiary": "#000000",
                        "on-secondary-fixed": "#002117",
                        "on-tertiary-container": "#cf6721",
                        "on-secondary-fixed-variant": "#0b513d",
                        "surface-bright": "#f7f9fb",
                        "surface": "#f7f9fb",
                        "on-background": "#191c1e",
                        "on-primary-container": "#7c839b",
                        "error": "#ba1a1a",
                        "on-primary-fixed-variant": "#3f465c",
                        "on-primary": "#ffffff",
                        "surface-container-highest": "#e0e3e5",
                        "background": "#f7f9fb",
                        "outline": "#76777d",
                        "on-tertiary-fixed": "#331200",
                        "on-secondary": "#ffffff",
                        "surface-container-low": "#f2f4f6",
                        "secondary-fixed-dim": "#95d3ba",
                        "on-secondary-container": "#306d58",
                        "primary-fixed": "#dae2fd",
                        "surface-dim": "#d8dadc",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "error-container": "#ffdad6",
                        "on-tertiary-fixed-variant": "#763300",
                        "surface-container": "#eceef0",
                        "primary-fixed-dim": "#bec6e0",
                        "inverse-on-surface": "#eff1f3",
                        "tertiary-fixed": "#ffdbca",
                        "on-error-container": "#93000a",
                        "tertiary-fixed-dim": "#ffb68e"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "stack-sm": "8px",
                        "gutter": "24px",
                        "stack-lg": "32px",
                        "container-max": "1280px",
                        "margin-mobile": "20px",
                        "section-gap": "80px",
                        "margin-desktop": "48px",
                        "stack-md": "16px"
                    },
                    "fontFamily": {
                        "body-md": ["Hanken Grotesk"],
                        "headline-sm": ["\"Source Serif 4\""],
                        "display-lg": ["\"Source Serif 4\""],
                        "label-md": ["Hanken Grotesk"],
                        "body-lg": ["Hanken Grotesk"],
                        "label-sm": ["Hanken Grotesk"],
                        "display-lg-mobile": ["\"Source Serif 4\""],
                        "headline-md": ["\"Source Serif 4\""]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "display-lg-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
        }
        .perspective-1000 { perspective: 1000px; }
        .timeline-line::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 1px;
            height: 100%;
            background-color: theme('colors.outline-variant');
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md selection:bg-secondary-container selection:text-on-secondary-container">
<!-- Top Navigation Bar -->
<nav class="fixed top-0 w-full z-50 bg-surface dark:bg-inverse-surface border-b border-outline-variant dark:border-outline flat no shadows">
<div class="flex justify-between items-center h-20 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary dark:text-inverse-primary cursor-pointer active:scale-95 transition-all">Bangun Mulyo</div>
<div class="hidden md:flex items-center gap-stack-lg">
<a class="font-label-md text-label-md uppercase tracking-[0.05em] text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors cursor-pointer" href="#">Home</a>
<a class="font-label-md text-label-md uppercase tracking-[0.05em] text-primary dark:text-inverse-primary border-b-2 border-primary dark:border-inverse-primary pb-1 cursor-pointer" href="#">About Us</a>
<a class="font-label-md text-label-md uppercase tracking-[0.05em] text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors cursor-pointer" href="#">Products</a>
<a class="font-label-md text-label-md uppercase tracking-[0.05em] text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-inverse-primary transition-colors cursor-pointer" href="#">Contact Us</a>
</div>
<div class="flex items-center gap-stack-md">
<a class="font-label-md text-label-md uppercase tracking-[0.05em] text-on-surface-variant hover:text-primary transition-colors cursor-pointer mr-2" href="#">Login</a>
<div class="material-symbols-outlined cursor-pointer hover:opacity-80 transition-opacity duration-300 p-2 text-on-surface-variant">shopping_bag</div>
<div class="material-symbols-outlined cursor-pointer hover:opacity-80 transition-opacity duration-300 p-2 text-on-surface-variant">person</div>
</div>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section / Title -->
<header class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-stack-md">Tentang Kami</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Mitra terpercaya Anda dalam konstruksi, menghadirkan material bangunan premium dan solusi ahli sejak 1994.</p>
</header>
<!-- Company Overview -->
<section class="py-section-gap bg-surface-container-low transition-all duration-1000 opacity-100">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
<div class="relative aspect-square overflow-hidden border border-outline-variant group">
<img alt="Interior toko material bangunan modern kelas atas. Jendela kaca besar menampilkan ruang pamer profesional yang cerah dengan tampilan ubin premium, contoh cat, dan perangkat keras arsitektural." class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAF_KzhSXKZ5PkObIKRqrzG_FvKrD22A49V_ckDDxs3SBXJyrf3ec_tyscxpq1coIQindzgJu8P5MYSK9NQmOzj9DPY1TWr243l4KUJBMA6lw_bWpZ4_nyXt1-xWxoGv4aNPoHeIQ7oFzYyAaJ0kwgIKo2EEzM06cuzsszOr_4Grr1mIz6u0trLT6fLz45p7tUvvRzlDAwFgyvLHy-h1LCKVCBAkBNNl-koisObsa1cZSRKhw-gPgE6xEzDnxdEl3BXuqch4sicKA">
</div>
<div class="space-y-stack-md">
<span class="font-label-md text-label-md text-secondary uppercase tracking-[0.1em]">Warisan Kami</span>
<h2 class="font-headline-md text-headline-md text-primary">Warisan Kepercayaan</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Bangun Mulyo berawal sebagai pemasok lokal yang berdedikasi pada filosofi bahwa konstruksi berkualitas bermula dari material yang tepat. Selama tiga dekade, kami telah berevolusi menjadi destinasi utama bagi kontraktor dan pemilik hunian yang mencari daya tahan dan keunggulan.</p>
<p class="font-body-md text-body-md text-on-surface-variant">Inventaris kami dikurasi dari produsen terpercaya yang memenuhi standar ketat kami, memastikan bahwa setiap proyek yang dibangun dengan material kami mampu bertahan melampaui waktu.</p>
<button class="px-stack-lg py-stack-md bg-primary text-on-primary font-label-md text-label-md uppercase tracking-[0.05em] hover:opacity-90 transition-all active:scale-95 border border-primary">Lihat Katalog Kami</button>
</div>
</div>
</section>
<!-- Store History (Timeline) -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto transition-all duration-1000 opacity-100">
<div class="text-center mb-stack-lg">
<h2 class="font-headline-md text-headline-md text-primary">Perjalanan Kami</h2>
</div>
<div class="relative mt-stack-lg timeline-line">
<!-- 1994 -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter mb-stack-lg relative z-10">
<div class="md:text-right md:pr-12 py-stack-md">
<div class="font-display-lg text-primary opacity-20">1994</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-2">Gudang Pertama</h3>
<p class="font-body-md text-on-surface-variant">Membuka lapangan pasokan pertama kami, menyediakan material bangunan esensial untuk proyek konstruksi lokal.</p>
</div>
<div class="hidden md:block"></div>
</div>
<!-- 2005 -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter mb-stack-lg relative z-10">
<div class="hidden md:block"></div>
<div class="md:pl-12 py-stack-md">
<div class="font-display-lg text-primary opacity-20">2005</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-2">Distribusi Regional</h3>
<p class="font-body-md text-on-surface-variant">Memperluas jaringan logistik kami untuk melayani seluruh wilayah, menjadi mitra kunci bagi infrastruktur skala besar.</p>
</div>
</div>
<!-- 2024 -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter relative z-10">
<div class="md:text-right md:pr-12 py-stack-md">
<div class="font-display-lg text-primary opacity-20">2024</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-2">Inovasi Berkelanjutan</h3>
<p class="font-body-md text-on-surface-variant">Memperkenalkan solusi bangunan ramah lingkungan dan manajemen inventaris digital untuk kebutuhan konstruksi modern.</p>
</div>
<div class="hidden md:block"></div>
</div>
</div>
</section>
<!-- Mission and Values -->
<section class="py-section-gap bg-surface-container-high transition-all duration-1000 opacity-100">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
<div class="flex flex-col md:flex-row justify-between items-end mb-stack-lg border-b border-outline-variant pb-stack-md">
<h2 class="font-headline-md text-headline-md text-primary">Misi &amp; Nilai Utama</h2>
<p class="font-label-md text-on-surface-variant uppercase tracking-widest max-w-xs md:text-right">Dibangun di atas pilar integritas dan keunggulan</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Card 1 -->
<div class="bg-surface p-stack-lg border border-outline-variant hover:shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all group">
<div class="w-12 h-12 bg-secondary-container flex items-center justify-center mb-stack-md">
<span class="material-symbols-outlined text-secondary">verified_user</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-stack-sm">Autentisitas</h3>
<p class="font-body-md text-on-surface-variant">Setiap item dalam koleksi kami diperiksa secara ketat untuk memastikan asal-usul dan integritas artistiknya.</p>
</div>
<!-- Card 2 -->
<div class="bg-surface p-stack-lg border border-outline-variant hover:shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all group">
<div class="w-12 h-12 bg-secondary-container flex items-center justify-center mb-stack-md">
<span class="material-symbols-outlined text-secondary">eco</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-stack-sm">Keberlanjutan</h3>
<p class="font-body-md text-on-surface-variant">Kami memprioritaskan manufaktur etis dan desain tahan lama yang meminimalkan dampak lingkungan.</p>
</div>
<!-- Card 3 -->
<div class="bg-surface p-stack-lg border border-outline-variant hover:shadow-[0px_4px_20px_rgba(0,0,0,0.05)] transition-all group">
<div class="w-12 h-12 bg-secondary-container flex items-center justify-center mb-stack-md">
<span class="material-symbols-outlined text-secondary">handshake</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-stack-sm">Integritas</h3>
<p class="font-body-md text-on-surface-variant">Membangun kepercayaan melalui transparansi harga, komunikasi yang jujur, dan praktik perdagangan yang adil.</p>
</div>
</div>
</div>
</section>
<!-- Why Choose Us -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto transition-all duration-1000 opacity-100">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter text-center">
<div class="space-y-stack-sm p-stack-md border border-slate-100 hover:border-slate-200 transition-colors">
<span class="material-symbols-outlined text-primary text-[40px]">diamond</span>
<h4 class="font-label-md text-label-md text-primary uppercase tracking-[0.05em]">Kualitas Premium</h4>
<p class="text-label-sm text-on-surface-variant">Dikurasi khusus untuk daya tahan dan hasil akhir sempurna.</p>
</div>
<div class="space-y-stack-sm p-stack-md border border-slate-100 hover:border-slate-200 transition-colors">
<span class="material-symbols-outlined text-primary text-[40px]">local_shipping</span>
<h4 class="font-label-md text-label-md text-primary uppercase tracking-[0.05em]">Penanganan Aman</h4>
<p class="text-label-sm text-on-surface-variant">Pengemasan ahli untuk aset yang paling berharga sekalipun.</p>
</div>
<div class="space-y-stack-sm p-stack-md border border-slate-100 hover:border-slate-200 transition-colors">
<span class="material-symbols-outlined text-primary text-[40px]">workspace_premium</span>
<h4 class="font-label-md text-label-md text-primary uppercase tracking-[0.05em]">Kepercayaan Terjamin</h4>
<p class="text-label-sm text-on-surface-variant">Sertifikat autentisitas seumur hidup bagi pelanggan.</p>
</div>
<div class="space-y-stack-sm p-stack-md border border-slate-100 hover:border-slate-200 transition-colors">
<span class="material-symbols-outlined text-primary text-[40px]">sentiment_very_satisfied</span>
<h4 class="font-label-md text-label-md text-primary uppercase tracking-[0.05em]">Kesuksesan Klien</h4>
<p class="text-label-sm text-on-surface-variant">Dukungan pramutamu 24/7 yang berdedikasi penuh.</p>
</div>
</div>
</section>
<!-- Related Article / Call to Action -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto transition-all duration-1000 opacity-100">
<div class="relative bg-inverse-surface text-inverse-on-surface overflow-hidden group">
<div class="absolute inset-0 opacity-40">
<img alt="Lapangan pasokan material bangunan yang besar dan terorganisir dengan truk serta tumpukan material konstruksi di bawah langit biru cerah." class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQxYlC7vl3UqTTIvWrkKMB24IR0aPFlWzip1yEO1jch94oplNGMCYNa4SAxO4GCC_Wbe5TVrc9rlA6agTMQq5HTTKoSQzRyKedz5Gdrp4gBFnztRn-pZzkkufzLRyDyB_OVMsjsI3ooiigop7l6iAY7zu1bYcUw6ZIlgN2wV0Kx2JTWchJc7k9la2ySkvp4taL_g17bnQmQZsZlJHhUzEP3U0pHhOxKXdKDabdFFYXmwzf0g6JIcgZc984umW_uIx97Htlo1LzZA">
</div>
<div class="relative z-10 p-stack-lg md:p-20 md:w-2/3 lg:w-1/2">
<span class="font-label-md text-secondary-fixed-dim uppercase tracking-[0.2em] mb-stack-md block">Eksplorasi Mendalam</span>
<h2 class="font-headline-md text-headline-md text-white mb-stack-md">Arsip Bangun Mulyo: Tiga Dekade Pasokan Utama</h2>
<p class="font-body-md text-on-surface-variant text-inverse-on-surface mb-stack-lg">Jelajahi kisah lengkap evolusi kami, dari lapangan pasokan lokal hingga menjadi pakar konstruksi terkemuka. Temukan proyek-proyek yang telah kami dukung dan para mitra yang membangun bersama kami.</p>
<a class="inline-flex items-center gap-2 font-label-md text-label-md uppercase tracking-[0.05em] text-secondary-fixed hover:gap-4 transition-all" href="#">Pelajari Sejarah Kami<span class="material-symbols-outlined">arrow_right_alt</span></a>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full mt-section-gap bg-surface-container-low dark:bg-inverse-surface border-t border-outline-variant">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter py-stack-lg px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<div class="col-span-1 md:col-span-1">
<div class="font-display-lg text-display-lg-mobile text-primary dark:text-inverse-primary mb-stack-md">Bangun Mulyo</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xs">Didirikan 1994. Menyediakan material bangunan berkualitas tinggi dan keahlian konstruksi bagi komunitas kami.</p>
</div>
<div class="space-y-stack-sm">
<h4 class="font-label-md text-label-md text-primary uppercase tracking-widest">Navigation</h4>
<ul class="space-y-2">
<li class=""><a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors" href="#">Home</a></li>
<li class=""><a class="font-body-md text-body-md text-primary dark:text-inverse-primary font-bold" href="#">About Us</a></li>
<li class=""><a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors" href="#">Products</a></li>
<li class=""><a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors" href="#">Contact Us</a></li>
</ul>
</div>
<div class="space-y-stack-sm">
<h4 class="font-label-md text-label-md text-primary uppercase tracking-widest">Support</h4>
<ul class="space-y-2">
<li class=""><a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors" href="#">Privacy Policy</a></li>
<li class=""><a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors" href="#">Terms of Service</a></li>
<li class=""><a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors" href="#">Shipping Info</a></li>
<li class=""><a class="font-body-md text-body-md text-on-surface-variant hover:text-secondary dark:hover:text-secondary-fixed transition-colors" href="#">Returns</a></li>
</ul>
</div>
<div class="space-y-stack-sm">
<h4 class="font-label-md text-label-md text-primary uppercase tracking-widest">Connect</h4>
<div class="flex gap-stack-md">
<div class="material-symbols-outlined cursor-pointer hover:text-secondary transition-colors text-on-surface-variant">mail</div>
<div class="material-symbols-outlined cursor-pointer hover:text-secondary transition-colors text-on-surface-variant">share</div>
<div class="material-symbols-outlined cursor-pointer hover:text-secondary transition-colors text-on-surface-variant">language</div>
</div>
</div>
</div>
<div class="border-t border-outline-variant py-stack-md px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
<p class="font-body-md text-body-md text-on-surface-variant text-center md:text-left">© 2024 Bangun Mulyo. Seluruh hak cipta dilindungi undang-undang.</p>
</div>
</footer>
<script>
    // Simple intersection observer for scroll animations
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, observerOptions);

    document.querySelectorAll('section').forEach(section => {
        section.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10');
        observer.observe(section);
    });

    // Header scroll behavior
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 20) {
            nav.classList.add('bg-opacity-95', 'backdrop-blur-sm');
        } else {
            nav.classList.remove('bg-opacity-95', 'backdrop-blur-sm');
        }
    });
</script>


</body></html>