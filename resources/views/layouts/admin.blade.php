<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | Bangun Mulyo CMS</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8fafc; }
        /* Animasi mulus untuk menu dropdown */
        .dropdown-enter { animation: fadeInDown 0.2s ease-out forwards; }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-8px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden text-slate-800 antialiased selection:bg-[#fd761a] selection:text-white">

    <!-- ================= 1. SIDEBAR ENTERPRISE (Responsive PC & HP) ================= -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-[#183059] text-white transition-transform duration-300 ease-in-out md:static md:translate-x-0 -translate-x-full flex flex-col shadow-2xl border-r border-white/10">
        
        <!-- Brand Logo Atas -->
        <div class="h-20 flex items-center gap-3 px-6 border-b border-white/10 select-none bg-[#122442]">
            <div class="w-10 h-10 rounded-xl bg-amber-400 text-[#183059] flex items-center justify-center font-black text-xl shadow-md">
                BM
            </div>
            <div class="flex flex-col">
                <span class="font-black text-lg tracking-wider leading-none">BANGUN MULYO</span>
                <span class="text-[9px] font-extrabold text-amber-400 tracking-widest uppercase mt-1">Warehouse ERP</span>
            </div>
        </div>

        <!-- Daftar Navigasi Utama -->
        <nav class="flex-1 overflow-y-auto py-6 px-3 space-y-1.5">
            
            <div class="px-3 pb-2 text-[10px] font-black tracking-widest uppercase text-slate-400">Pusat Kendali</div>

            @php
                $menuItems = [
                    ['route' => 'admin.dashboard.index', 'icon' => 'dashboard', 'label' => 'Ikhtisar Gudang'],
                    ['route' => 'admin.produk.index', 'icon' => 'inventory_2', 'label' => 'Katalog Produk'],
                    ['route' => 'admin.kontak.index', 'icon' => 'mark_email_unread', 'label' => 'Pesan Masuk (RAB)'],
                ];
            @endphp

            @foreach($menuItems as $item)
                @php $isActive = request()->routeIs($item['route'] . '*'); @endphp
                <a href="{{ route($item['route']) }}"
                   class="flex items-center gap-3.5 px-4 py-3 rounded-2xl font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ $isActive ? 'bg-[#fd761a] text-white shadow-lg shadow-[#fd761a]/30' : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">
                    <span class="material-symbols-outlined text-xl {{ $isActive ? 'text-white' : 'text-slate-400 group-hover:text-amber-400' }} transition-colors">
                        {{ $item['icon'] }}
                    </span>
                    <span>{{ $item['label'] }}</span>
                </a>
            @endforeach

            <!-- Grup Konfigurasi Web -->
            <div class="pt-6 pb-2 px-3 text-[10px] font-black tracking-widest uppercase text-slate-400">Tata Tampilan Depan</div>
            
            <a href="{{ route('admin.hero.edit') }}" 
               class="flex items-center gap-3.5 px-4 py-3 rounded-2xl font-bold text-xs uppercase tracking-wider transition-all duration-200 group {{ request()->routeIs('admin.hero.*') ? 'bg-[#fd761a] text-white shadow-lg shadow-[#fd761a]/30' : 'text-slate-300 hover:bg-white/10 hover:text-white' }}">
                <span class="material-symbols-outlined text-xl {{ request()->routeIs('admin.hero.*') ? 'text-white' : 'text-slate-400 group-hover:text-amber-400' }}">web_stories</span>
                <span>Banner Slogan (Hero)</span>
            </a>

        </nav>

        <!-- Sidebar Footer Status -->
        <div class="p-4 m-3 bg-white/5 border border-white/10 rounded-2xl hidden sm:block">
            <div class="flex items-center gap-2 text-xs font-mono font-bold text-emerald-400 mb-1">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Sistem Stabil
            </div>
            <p class="text-[10px] text-slate-400">Server Time: <span id="clock-display" class="text-white font-mono font-bold"></span></p>
        </div>

    </aside>

    <!-- Overlay Gelap Khusus Layar HP saat Sidebar Dibuka -->
    <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 z-40 bg-slate-900/60 backdrop-blur-xs hidden md:hidden"></div>


    <!-- ================= 2. KONTEN UTAMA KANAN ================= -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden w-full relative">
        
        <!-- HEADER TOP BAR -->
        <header class="h-20 bg-white border-b border-slate-200/80 flex items-center justify-between px-4 sm:px-8 z-30">
            
            <div class="flex items-center gap-4">
                <!-- Tombol Hamburger (Hanya muncul di HP) -->
                <button onclick="toggleSidebar()" class="p-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-600 md:hidden focus:outline-none">
                    <span class="material-symbols-outlined text-2xl block">menu</span>
                </button>

                <h1 class="text-lg sm:text-2xl font-black text-[#183059] tracking-tight truncate max-w-[180px] sm:max-w-md">
                    @yield('header', 'Dashboard')
                </h1>
            </div>

            <div class="flex items-center gap-3 sm:gap-6">
                
                <!-- Link Buka Web Depan -->
                <a href="{{ url('/') }}" target="_blank" 
                   class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-slate-100 hover:bg-[#183059] text-slate-600 hover:text-white font-bold text-xs transition-all shadow-2xs group">
                    <span class="material-symbols-outlined text-base text-[#fd761a] group-hover:text-amber-400">public</span>
                    <span>Lihat Toko Depan</span>
                </a>

                <div class="h-8 w-[1px] bg-slate-200 hidden sm:block"></div>

                <!-- ================= 3. TOMBOL PROFIL YANG BISA DIKLIK ================= -->
                <div class="relative">
                    <button id="profile-trigger" type="button" 
                            class="flex items-center gap-3 p-1.5 rounded-2xl hover:bg-slate-100 border border-transparent hover:border-slate-200 transition-all focus:outline-none group">
                        
                        <!-- Avatar Inisial -->
                        <div class="w-10 h-10 rounded-xl bg-[#183059] text-amber-400 font-black flex items-center justify-center shadow-md group-hover:scale-105 transition-transform">
                            {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                        </div>

                        <!-- Nama (Desktop only) -->
                        <div class="text-left hidden md:block">
                            <span class="block text-xs font-black text-slate-800 leading-none">
                                {{ auth()->user()->name ?? 'Administrator' }}
                            </span>
                            <span class="text-[10px] font-bold text-emerald-600 flex items-center gap-1 mt-1">
                                ● Online Staff
                            </span>
                        </div>

                        <span class="material-symbols-outlined text-slate-400 text-lg transition-transform duration-200" id="profile-chevron">expand_more</span>
                    </button>

                    <!-- ISI MENU DROPDOWN MELAYANG -->
                    <div id="profile-menu" class="hidden absolute right-0 mt-3 w-64 bg-white rounded-3xl shadow-2xl border border-slate-100 p-3 z-50 dropdown-enter">
                        
                        <!-- Info Akun Mobile -->
                        <div class="p-3 bg-slate-50 rounded-2xl mb-2 md:hidden">
                            <p class="text-xs font-black text-slate-800 truncate">{{ auth()->user()->name ?? 'Administrator' }}</p>
                            <p class="text-[10px] text-slate-400 truncate">{{ auth()->user()->email ?? 'admin@toko.com' }}</p>
                        </div>

                        <div class="px-3 py-2 border-b border-slate-100 hidden md:block">
                            <span class="text-[10px] font-bold text-slate-400 uppercase">Akses Login Terdaftar</span>
                            <p class="text-xs font-bold text-[#183059] truncate">{{ auth()->user()->email ?? 'root@bangunmulyo.com' }}</p>
                        </div>

                        <div class="py-1.5 space-y-1">
                            <a href="{{ route('home') }}" target="_blank" class="flex sm:hidden items-center gap-2.5 px-3 py-2 text-xs font-bold text-slate-600 rounded-xl hover:bg-slate-100">
                                <span class="material-symbols-outlined text-base text-[#fd761a]">public</span> Lihat Toko Depan
                            </a>
                            <a href="{{ route('admin.hero.edit') }}" class="flex items-center gap-2.5 px-3 py-2 text-xs font-bold text-slate-600 rounded-xl hover:bg-slate-100 hover:text-[#183059]">
                                <span class="material-symbols-outlined text-base text-slate-400">tune</span> Konfigurasi Web
                            </a>
                        </div>

                        <div class="pt-1.5 mt-1 border-t border-slate-100">
                            <form method="POST" action="{{ route('logout') }}" class="m-0">
                                @csrf
                                <button type="submit" 
                                        class="w-full flex items-center gap-2.5 px-3 py-2.5 text-xs font-black text-rose-600 rounded-xl hover:bg-rose-50 transition-colors cursor-pointer">
                                    <span class="material-symbols-outlined text-base">logout</span> Keluar Sistem
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- ================= END DROPDOWN PROFIL ================= -->

            </div>

        </header>

        <!-- LUBANG KONTEN HALAMAN -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-slate-100/70 p-4 sm:p-10">
            @yield('content')
        </main>

    </div>

    <!-- ================= 3. JAVASCRIPT LOGIKA LAYOUT ================= -->
    <script>
        // Logika Jam Digital Live
        setInterval(() => {
            const el = document.getElementById('clock-display');
            if(el) el.innerText = new Date().toLocaleTimeString('id-ID', {hour: '2-digit', minute:'2-digit', second:'2-digit'});
        }, 1000);

        // Logika Buka/Tutup Sidebar HP
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        // Logika Klik Tombol Profil Dropdown
        const trigger = document.getElementById('profile-trigger');
        const menu = document.getElementById('profile-menu');
        const chevron = document.getElementById('profile-chevron');

        if(trigger) {
            trigger.addEventListener('click', function(e) {
                e.stopPropagation();
                menu.classList.toggle('hidden');
                chevron.classList.toggle('rotate-180');
            });
        }

        // Jurus UX: Klik di sembarang tempat layar otomatis menutup menu dropdown profil
        window.addEventListener('click', function(e) {
            if (menu && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
                if(chevron) chevron.classList.remove('rotate-180');
            }
        });
    </script>

</body>
</html>