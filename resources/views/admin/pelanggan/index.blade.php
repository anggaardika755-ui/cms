<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Daftar Pelanggan | Bangun Mulyo - Panel Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@600;700&family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-lowest": "#ffffff", "surface-container": "#eceef0", "surface-container-low": "#f2f4f6",
                    "primary-fixed-dim": "#bec6e0", "on-surface": "#191c1e", "surface": "#f7f9fb",
                    "tertiary-fixed-dim": "#ffb68e", "on-tertiary-fixed-variant": "#763300", "primary-container": "#131b2e",
                    "inverse-on-surface": "#eff1f3", "on-surface-variant": "#45464d", "on-tertiary-fixed": "#331200",
                    "outline-variant": "#c6c6cd", "surface-bright": "#f7f9fb", "on-secondary-container": "#306d58",
                    "on-primary": "#ffffff", "on-error-container": "#93000a", "surface-container-high": "#e6e8ea",
                    "on-primary-fixed-variant": "#3f465c", "secondary-container": "#adedd3", "background": "#f7f9fb",
                    "secondary-fixed-dim": "#95d3ba", "on-secondary-fixed-variant": "#0b513d", "tertiary-fixed": "#ffdbca",
                    "surface-container-highest": "#e0e3e5", "surface-dim": "#d8dadc", "surface-tint": "#565e74",
                    "primary": "#000000", "on-secondary-fixed": "#002117", "error": "#ba1a1a",
                    "on-primary-fixed": "#131b2e", "on-error": "#ffffff", "primary-fixed": "#dae2fd",
                    "surface-variant": "#e0e3e5", "on-primary-container": "#7c839b", "inverse-primary": "#bec6e0",
                    "tertiary-container": "#331200", "error-container": "#ffdad6", "on-tertiary": "#ffffff",
                    "on-background": "#191c1e", "secondary": "#2b6954", "outline": "#76777d",
                    "on-tertiary-container": "#cf6721", "inverse-surface": "#2d3133", "tertiary": "#000000",
                    "secondary-fixed": "#b0f0d6", "on-secondary": "#ffffff"
            },
            "borderRadius": { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
            "spacing": { "gutter": "24px", "section-gap": "80px", "margin-mobile": "20px", "stack-lg": "32px", "margin-desktop": "48px", "stack-sm": "8px", "stack-md": "16px", "container-max": "1280px" },
            "fontFamily": { "headline-md": ["\"Source Serif 4\""], "display-lg": ["\"Source Serif 4\""], "label-sm": ["Hanken Grotesk"], "display-lg-mobile": ["\"Source Serif 4\""], "body-lg": ["Hanken Grotesk"], "label-md": ["Hanken Grotesk"], "headline-sm": ["\"Source Serif 4\""], "body-md": ["Hanken Grotesk"] }
          },
        },
      }
    </script>
    <style>
        body { background-color: #f7f9fb; color: #191c1e; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c6c6cd; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #76777d; }
    </style>
</head>
<body class="font-body-md text-body-md antialiased overflow-hidden">
<div class="flex h-screen overflow-hidden">
    
    <aside class="h-screen w-64 fixed left-0 top-0 bg-surface-container-low border-r border-outline-variant flex flex-col px-4 py-6 z-40">
        
        <div class="mb-8 px-2">
            <h1 class="font-headline-sm text-headline-sm font-semibold text-primary">Bangun Mulyo</h1>
            <p class="font-label-sm text-on-surface-variant opacity-70 tracking-tight">Admin Panel</p>
        </div>
        
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-4 text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant transition-all rounded-md cursor-pointer" href="{{ route('admin.dashboard.index') }}">
                <span class="material-symbols-outlined text-[22px]" data-icon="dashboard">dashboard</span>
                <span>Ringkasan</span>
            </a>
            
            <a class="flex items-center gap-4 bg-secondary-container text-on-secondary-container p-3 font-label-md text-label-md rounded-md cursor-pointer" href="{{ route('admin.pelanggan.index') }}">
                <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">group</span>
                <span class="font-semibold">Pelanggan</span>
            </a>
            
            <a class="flex items-center gap-4 text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant transition-all rounded-md cursor-pointer" href="{{ route('admin.produk.index') }}">
                <span class="material-symbols-outlined text-[22px]" data-icon="inventory_2">inventory_2</span>
                <span>Produk</span>
            </a>
            
            <a class="flex items-center gap-4 text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant transition-all rounded-md cursor-pointer" href="#">
                <span class="material-symbols-outlined text-[22px]" data-icon="shopping_cart">shopping_cart</span>
                <span>Transaksi</span>
            </a>
            
            <a class="flex items-center gap-4 text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant transition-all rounded-md cursor-pointer" href="#">
                <span class="material-symbols-outlined text-[22px]" data-icon="receipt_long">receipt_long</span>
                <span>Detail Transaksi</span>
            </a>

            <a class="flex items-center gap-4 text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant transition-all rounded-md cursor-pointer" href="#">
                <span class="material-symbols-outlined text-[22px]" data-icon="settings">settings</span>
                <span>Pengaturan</span>
            </a>
        </nav>

        <div class="mt-auto pt-4 border-t border-outline-variant/60">
            <a class="flex items-center gap-4 text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant transition-all rounded-md cursor-pointer" href="#">
                <span class="material-symbols-outlined text-[22px]" data-icon="logout">logout</span>
                <span>Keluar</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 ml-64 overflow-y-auto bg-surface min-h-screen">
        
        <header class="sticky top-0 bg-surface/80 backdrop-blur-md z-30 px-margin-desktop h-20 flex items-center justify-between border-b border-outline-variant/30">
            <div class="flex flex-col">
                <h2 class="font-headline-sm text-headline-sm text-primary tracking-tight">Daftar Pelanggan</h2>
                <p class="font-body-md text-on-surface-variant opacity-80">Kelola informasi pelanggan Bangun Mulyo</p>
            </div>
            <div class="flex items-center gap-stack-md">
                
                <a href="{{ route('admin.pelanggan.create') }}" class="flex items-center gap-2 bg-primary text-on-primary px-6 py-2.5 rounded-none font-label-md text-label-md uppercase tracking-wider hover:opacity-90 active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-[20px]" data-icon="add">add</span>
                    Tambah Pelanggan
                </a>

                <div class="w-10 h-10 rounded-full border border-outline-variant flex items-center justify-center overflow-hidden bg-surface-container-high">
                    <img alt="Admin User" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQuRkgzwXY0SeF64jTTmsmHqVh8lUWhfYdKvCrFVJkrqPo0mcL5aBrR8u5JzylBSpUpMANHoNumFZAA-ghE8Acuyf-5q-Rf5OK9DbdqGcAZ3YHxUKeOde2RYvviOnsRJ3ixGa7uNTzsfk2bVDZH_hAPfiEoSUjuZSgqeODtY7NLJDcQMFFMy3yvthVXqQmgy6U9a8rIhSm_bzcjdpVPTa5Q3y_YoAsNAT5Q7nc4g7r-IfUOcQMp_w28jVeAH3HaVuDpHr6LmZkvA"/>
                </div>
            </div>
        </header>

        @if(session('success'))
            <div class="px-margin-desktop pt-stack-sm mt-4">
                <div class="bg-secondary-container text-on-secondary-container p-4 rounded-md flex items-center gap-3">
                    <span class="material-symbols-outlined">check_circle</span>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        <section class="px-margin-desktop py-stack-md">
            <div class="bg-surface-container-lowest border border-outline-variant p-4 flex flex-col md:flex-row gap-gutter items-center">
                <div class="relative flex-1 group">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-primary" data-icon="search">search</span>
                    <input class="w-full pl-10 pr-4 py-2 bg-transparent border border-outline-variant focus:border-primary focus:ring-0 text-body-md font-body-md transition-colors placeholder:text-outline" placeholder="Cari berdasarkan nama atau ID..." type="text"/>
                </div>
            </div>
        </section>

        <section class="px-margin-desktop pb-section-gap">
            <div class="bg-surface-container-lowest border border-outline-variant overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-surface-container-low border-b border-outline-variant">
                        <tr>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">ID Pelanggan</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Nama Pelanggan</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">No Telepon</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Alamat</th>
                            <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-wider text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        
                        @php
                            $avatarColors = [
                                'bg-primary-fixed-dim text-on-primary-fixed',
                                'bg-secondary-fixed-dim text-on-secondary-fixed',
                                'bg-tertiary-fixed-dim text-on-tertiary-fixed',
                                'bg-primary-fixed text-on-primary-fixed',
                                'bg-secondary-fixed text-on-secondary-fixed'
                            ];
                        @endphp

                        @forelse($pelanggans as $index => $pelanggan)
                            @php
                                $initials = strtoupper(substr(preg_replace('/[^a-zA-Z]/', '', $pelanggan->nama_pelanggan), 0, 2));
                                $colorClass = $avatarColors[$index % count($avatarColors)];
                            @endphp

                            <tr class="hover:bg-surface-container-lowest/50 transition-colors group">
                                <td class="px-6 py-5 font-label-md text-primary">#BM-{{ sprintf('%05d', $pelanggan->id_pelanggan) }}</td>
                                <td class="px-6 py-5">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full {{ $colorClass }} flex items-center justify-center font-bold text-xs">
                                            {{ $initials }}
                                        </div>
                                        <span class="font-semibold text-primary">{{ $pelanggan->nama_pelanggan }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-5 text-on-surface-variant">{{ $pelanggan->no_telepon }}</td>
                                <td class="px-6 py-5 text-on-surface-variant italic">{{ $pelanggan->alamat }}</td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        
                                        <a href="{{ route('admin.pelanggan.edit', $pelanggan->id_pelanggan) }}" class="p-2 hover:bg-surface-container rounded-full transition-colors" title="Edit">
                                            <span class="material-symbols-outlined text-on-surface-variant" data-icon="edit">edit</span>
                                        </a>

                                        <form action="{{ route('admin.pelanggan.destroy', $pelanggan->id_pelanggan) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus {{ $pelanggan->nama_pelanggan }}?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 hover:bg-error-container hover:text-error rounded-full transition-colors" title="Hapus">
                                                <span class="material-symbols-outlined text-on-surface-variant hover:text-error" data-icon="delete">delete</span>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-on-surface-variant">Data pelanggan belum tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                
                <div class="bg-surface-container-low px-6 py-4 flex items-center justify-between border-t border-outline-variant">
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Menampilkan data pelanggan</span>
                </div>
            </div>
        </section>
        
    </main>
</div>
</body>
</html>