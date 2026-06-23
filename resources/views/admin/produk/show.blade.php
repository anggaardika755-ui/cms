<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Detail Produk | Bangun Mulyo Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;0,8..60,700;1,8..60,400&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-bright": "#f7f9fb", "on-primary-container": "#7c839b", "on-primary-fixed-variant": "#3f465c",
                        "error": "#ba1a1a", "secondary-container": "#adedd3", "on-secondary": "#ffffff",
                        "surface-container-low": "#f2f4f6", "secondary": "#2b6954", "on-tertiary-fixed-variant": "#763300",
                        "error-container": "#ffdad6", "on-surface": "#191c1e", "on-primary": "#ffffff",
                        "primary-container": "#131b2e", "primary": "#000000", "surface-container-highest": "#e0e3e5",
                        "primary-fixed": "#dae2fd", "inverse-on-surface": "#eff1f3", "surface": "#f7f9fb",
                        "tertiary": "#000000", "secondary-fixed": "#b0f0d6", "tertiary-fixed": "#ffdbca",
                        "on-error-container": "#93000a", "surface-container-lowest": "#ffffff", "tertiary-fixed-dim": "#ffb68e",
                        "surface-tint": "#565e74", "on-surface-variant": "#45464d", "on-secondary-fixed-variant": "#0b513d",
                        "surface-container-high": "#e6e8ea", "on-primary-fixed": "#131b2e", "on-tertiary-fixed": "#331200",
                        "on-secondary-container": "#306d58", "on-tertiary": "#ffffff", "on-background": "#191c1e",
                        "inverse-primary": "#bec6e0", "background": "#f7f9fb", "outline": "#76777d", "surface-dim": "#d8dadc",
                        "tertiary-container": "#331200", "surface-container": "#eceef0", "secondary-fixed-dim": "#95d3ba",
                        "outline-variant": "#c6c6cd", "inverse-surface": "#2d3133", "surface-variant": "#e0e3e5",
                        "on-tertiary-container": "#cf6721", "on-secondary-fixed": "#002117", "on-error": "#ffffff",
                        "primary-fixed-dim": "#bec6e0"
                    },
                    "borderRadius": { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
                    "spacing": { "stack-md": "16px", "margin-mobile": "20px", "container-max": "1280px", "stack-lg": "32px", "section-gap": "80px", "margin-desktop": "48px", "gutter": "24px", "stack-sm": "8px" },
                    "fontFamily": { "body-md": ["Hanken Grotesk"], "display-lg": ["\"Source Serif 4\""], "label-sm": ["Hanken Grotesk"], "body-lg": ["Hanken Grotesk"], "headline-sm": ["\"Source Serif 4\""], "label-md": ["Hanken Grotesk"], "headline-md": ["\"Source Serif 4\""] },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; vertical-align: middle; }
        body { font-family: 'Hanken Grotesk', sans-serif; background-color: #f7f9fb; }
        .sidebar-active { background-color: #b0f0d6; color: #002117; font-weight: 700; }
        .sidebar-active .material-symbols-outlined { font-variation-settings: 'FILL' 1; }
    </style>
</head>
<body class="bg-background text-on-surface antialiased">
<div class="flex min-h-screen">
    
    <aside class="hidden md:flex flex-col h-screen w-64 bg-surface-container-low border-r border-outline-variant fixed left-0 top-0 z-50 py-stack-md">
        <div class="mb-stack-lg px-6 mt-2">
            <h1 class="font-headline-sm text-[28px] font-bold text-primary leading-tight" style="font-family: 'Source Serif 4', serif;">Bangun Mulyo</h1>
            <p class="font-label-sm text-outline tracking-tight mt-1 text-[14px]">Panel Admin</p>
        </div>
        
        <nav class="flex-1 overflow-y-auto">
            <ul class="space-y-2 px-4">
                <li>
                    <a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors font-label-md text-label-md {{ request()->routeIs('admin.dashboard.*') ? 'sidebar-active' : 'text-on-surface-variant hover:bg-surface-variant' }}" href="{{ route('admin.dashboard.index') ?? '#' }}">
                        <span class="material-symbols-outlined">dashboard</span>
                        <span>Ringkasan</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors font-label-md text-label-md {{ request()->routeIs('admin.pelanggan.*') ? 'sidebar-active' : 'text-on-surface-variant hover:bg-surface-variant' }}" href="#">
                        <span class="material-symbols-outlined">group</span>
                        <span>Pelanggan</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors font-label-md text-label-md {{ request()->routeIs('admin.produk.*') ? 'sidebar-active' : 'text-on-surface-variant hover:bg-surface-variant' }}" href="{{ route('admin.produk.index') }}">
                        <span class="material-symbols-outlined">inventory_2</span>
                        <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors font-label-md text-label-md {{ request()->routeIs('admin.transaksi.*') ? 'sidebar-active' : 'text-on-surface-variant hover:bg-surface-variant' }}" href="#">
                        <span class="material-symbols-outlined">receipt_long</span>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors font-label-md text-label-md {{ request()->routeIs('admin.detail-transaksi.*') ? 'sidebar-active' : 'text-on-surface-variant hover:bg-surface-variant' }}" href="#">
                        <span class="material-symbols-outlined">receipt_long</span>
                        <span>Detail Transaksi</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-4 px-4 py-3 rounded-lg transition-colors font-label-md text-label-md {{ request()->routeIs('admin.pengaturan.*') ? 'sidebar-active' : 'text-on-surface-variant hover:bg-surface-variant' }}" href="#">
                        <span class="material-symbols-outlined">settings</span>
                        <span>Pengaturan</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="mt-auto flex flex-col gap-4 px-4 pb-4">
            <hr class="border-outline-variant mb-2">
            <a href="{{ route('admin.produk.create') ?? '#' }}" class="w-full bg-primary text-on-primary font-bold py-4 rounded-sm hover:opacity-90 transition-all uppercase text-sm tracking-widest text-center cursor-pointer">
                TAMBAH PRODUK
            </a>
            <a href="#" class="flex items-center gap-4 px-4 py-3 font-label-md text-label-md text-on-surface-variant hover:bg-surface-variant transition-all rounded-lg cursor-pointer">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-semibold">Keluar</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 md:ml-64 min-h-screen">
        <header class="sticky top-0 bg-surface/80 backdrop-blur-md z-40 border-b border-outline-variant px-margin-desktop py-4 flex justify-between items-center">
            <div class="flex items-center gap-2 text-on-surface-variant">
                <a class="hover:text-primary transition-colors font-label-md text-label-md" href="{{ route('admin.produk.index') }}">Produk</a>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                <span class="text-primary font-bold font-label-md text-label-md">Detail Produk</span>
            </div>
        </header>

        <div class="max-w-[800px] mx-auto py-12 px-margin-mobile md:px-0">
            
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h1 class="font-headline-md text-headline-md text-primary">Informasi Detail Produk</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-2">Melihat spesifikasi lengkap dan status inventaris produk.</p>
                </div>
            </div>

            <div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-stack-lg shadow-sm">
                
                <div class="space-y-8">
                    <div class="flex justify-between items-start pb-6 border-b border-slate-100">
                        <div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest block mb-1">ID Produk</span>
                            <span class="font-mono text-lg font-semibold text-primary bg-surface-container-low px-3 py-1 rounded border border-outline-variant">BM-{{ str_pad($produk->id_produk, 3, '0', STR_PAD_LEFT) }}</span>
                        </div>
                        <div class="text-right">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest block mb-1">Tanggal Terdaftar</span>
                            <span class="font-body-md text-primary">{{ $produk->created_at ? $produk->created_at->format('d M Y') : '-' }}</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest block mb-2">Nama Produk</span>
                            <p class="font-body-lg text-primary font-medium">{{ $produk->nama_produk }}</p>
                        </div>
                        
                        <div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest block mb-2">Harga Jual Satuan</span>
                            <p class="font-body-lg text-primary font-bold text-2xl">Rp {{ number_format($produk->harga_jual, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="bg-surface-container-low p-6 rounded border border-outline-variant mt-6 flex items-center justify-between">
                        <div>
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest block mb-2">Ketersediaan Gudang</span>
                            <div class="flex items-center gap-3">
                                <span class="w-3 h-3 rounded-full {{ $produk->jumlah_produk < 10 ? 'bg-error animate-pulse' : 'bg-secondary' }}"></span>
                                <p class="font-body-lg font-semibold {{ $produk->jumlah_produk < 10 ? 'text-error' : 'text-primary' }}">
                                    {{ $produk->jumlah_produk }} Unit
                                </p>
                            </div>
                            @if($produk->jumlah_produk < 10)
                                <p class="text-sm text-error mt-1">Peringatan: Stok menipis, segera lakukan restock!</p>
                            @else
                                <p class="text-sm text-secondary mt-1">Stok dalam kondisi aman.</p>
                            @endif
                        </div>
                        <span class="material-symbols-outlined text-outline" style="font-size: 48px;">inventory_2</span>
                    </div>

                    <div class="border-t border-slate-100 pt-8 mt-8 flex justify-end gap-4">
                        <a href="{{ route('admin.produk.index') }}" class="px-6 py-3 border border-outline-variant text-primary font-label-md text-label-md uppercase tracking-wider hover:bg-surface-container-highest transition-all rounded flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">arrow_back</span>
                            Kembali
                        </a>
                        <a href="{{ route('admin.produk.edit', $produk->id_produk) }}" class="px-6 py-3 bg-primary text-on-primary font-label-md text-label-md uppercase tracking-wider hover:opacity-90 shadow-md transition-all active:scale-95 flex items-center gap-2 rounded">
                            <span class="material-symbols-outlined text-sm">edit</span>
                            Edit Produk
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
</body>
</html>