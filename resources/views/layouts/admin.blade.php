<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') | Bangun Mulyo</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f2f4f6; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>

<body class="flex h-screen overflow-hidden text-[#191c1e]">

    <aside class="w-64 bg-[#1e3a8a] text-white flex flex-col shadow-xl z-20">
        
        <div class="h-16 flex items-center px-6 border-b border-white/10 font-bold text-xl tracking-wide">
            Bangun Mulyo
        </div>

        <nav class="flex-1 overflow-y-auto py-4 space-y-1 px-3">
            @php
                // Daftar menu untuk efisiensi kode
                $menuItems = [
                    ['route' => 'admin.dashboard.index', 'icon' => 'dashboard', 'label' => 'Dashboard'],
                    ['route' => 'admin.produk.index', 'icon' => 'inventory_2', 'label' => 'Kelola Produk'],
                    ['route' => 'admin.kontak.index', 'icon' => 'mail', 'label' => 'Pesan Masuk'],
                ];
            @endphp

            @foreach($menuItems as $item)
                <a href="{{ route($item['route']) }}"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors {{ request()->routeIs($item['route']) ? 'bg-white/20' : 'hover:bg-white/10' }}"
                    @if(request()->routeIs($item['route'])) aria-current="page" @endif>
                    <span class="material-symbols-outlined text-lg">{{ $item['icon'] }}</span>
                    {{ $item['label'] }}
                </a>
            @endforeach

            <div class="pt-4 pb-1">
                <p class="px-3 text-xs font-semibold text-[#90a8ff] uppercase tracking-wider">Pengaturan</p>
            </div>
            
           <a href="{{ route('admin.hero.edit') }}" class="flex items-center gap-3 ...">
                <span class="material-symbols-outlined">...</span>
                <span>Pengaturan Konten</span>
           </a>
        </nav>

        <div class="p-4 border-t border-white/10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 px-3 py-2.5 w-full rounded-lg text-red-300 hover:bg-red-500/20 transition-colors">
                    <span class="material-symbols-outlined text-lg">logout</span>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <div class="flex-1 flex flex-col h-screen overflow-hidden">
        
        <header class="h-16 bg-white shadow-sm flex items-center justify-between px-8 z-10">
            <h1 class="text-xl font-semibold text-[#1e3a8a]">@yield('header', 'Dashboard')</h1>

            <div class="flex items-center gap-4">
               <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-2 ...">
                  <span class="material-symbols-outlined">open_in_new</span>
                  <span>Lihat Website</span>
              </a>
                
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-[#dce1ff] text-[#1e3a8a] rounded-full flex items-center justify-center font-bold">A</div>
                    <span class="text-sm font-medium">Administrator</span>
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-[#f2f4f6] p-8">
            @yield('content')
        </main>
    </div>

</body>
</html>