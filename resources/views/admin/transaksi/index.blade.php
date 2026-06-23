<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Daftar Transaksi - Bangun Mulyo Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;0,8..60,700;1,8..60,400&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-container": "#331200",
                        "on-primary-container": "#7c839b",
                        "inverse-on-surface": "#eff1f3",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#3f465c",
                        "surface-tint": "#565e74",
                        "surface-bright": "#f7f9fb",
                        "surface-container-lowest": "#ffffff",
                        "inverse-surface": "#2d3133",
                        "secondary-fixed-dim": "#95d3ba",
                        "surface-container": "#eceef0",
                        "on-primary-fixed": "#131b2e",
                        "on-secondary-container": "#306d58",
                        "primary-fixed-dim": "#bec6e0",
                        "tertiary-fixed": "#ffdbca",
                        "primary": "#000000",
                        "inverse-primary": "#bec6e0",
                        "on-tertiary-fixed-variant": "#763300",
                        "on-primary": "#ffffff",
                        "error": "#ba1a1a",
                        "surface-variant": "#e0e3e5",
                        "surface-container-highest": "#e0e3e5",
                        "background": "#f7f9fb",
                        "on-surface-variant": "#45464d",
                        "on-tertiary-fixed": "#331200",
                        "on-secondary-fixed": "#002117",
                        "tertiary-fixed-dim": "#ffb68e",
                        "tertiary": "#000000",
                        "secondary-container": "#adedd3",
                        "error-container": "#ffdad6",
                        "surface-container-low": "#f2f4f6",
                        "secondary": "#2b6954",
                        "primary-fixed": "#dae2fd",
                        "on-background": "#191c1e",
                        "outline": "#76777d",
                        "on-error": "#ffffff",
                        "primary-container": "#131b2e",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-container": "#cf6721",
                        "on-surface": "#191c1e",
                        "on-error-container": "#93000a",
                        "surface-dim": "#d8dadc",
                        "surface-container-high": "#e6e8ea",
                        "secondary-fixed": "#b0f0d6",
                        "outline-variant": "#c6c6cd",
                        "on-secondary-fixed-variant": "#0b513d",
                        "surface": "#f7f9fb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "stack-sm": "8px",
                        "stack-lg": "32px",
                        "margin-mobile": "20px",
                        "margin-desktop": "48px",
                        "container-max": "1280px",
                        "stack-md": "16px",
                        "section-gap": "80px"
                    },
                    "fontFamily": {
                        "label-sm": ["Hanken Grotesk"],
                        "label-md": ["Hanken Grotesk"],
                        "headline-sm": ["\"Source Serif 4\""],
                        "display-lg-mobile": ["\"Source Serif 4\""],
                        "display-lg": ["\"Source Serif 4\""],
                        "body-lg": ["Hanken Grotesk"],
                        "headline-md": ["\"Source Serif 4\""],
                        "body-md": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "display-lg-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #f7f9fb;
            color: #191c1e;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-nav {
            background-color: #adedd3 !important; 
            color: #002117 !important;
            font-weight: 700;
        }
        .table-row-hover:hover {
            background-color: rgba(236, 238, 240, 0.5);
        }
    </style>
</head>
<body class="font-body-md text-body-md overflow-x-hidden">
    <aside class="h-screen w-64 fixed left-0 top-0 bg-surface border-r border-outline-variant flex flex-col py-stack-lg z-50">
        <div class="px-6 mb-10">
            <h1 class="font-headline-sm text-headline-sm text-primary tracking-tight">Bangun Mulyo</h1>
            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest mt-1">Admin Dashboard</p>
        </div>
        <nav class="flex-1 px-3 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-surface-container transition-colors duration-200 font-label-md text-label-md" href="{{ route('admin.dashboard.index') }}">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Ringkasan
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-surface-container transition-colors duration-200 font-label-md text-label-md" href="{{ route('admin.pelanggan.index') }}">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                Pelanggan
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-surface-container transition-colors duration-200 font-label-md text-label-md" href="{{ route('admin.produk.index') }}">
                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                Produk
            </a>
            <a class="active-nav flex items-center gap-3 px-4 py-3 rounded transition-colors duration-200 font-label-md text-label-md" href="{{ route('admin.transaksi.index') }}">
                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                Transaksi
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-surface-container transition-colors duration-200 font-label-md text-label-md" href="#">
                <span class="material-symbols-outlined" data-icon="receipt">receipt</span>
                Detail Transaksi
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-surface-container transition-colors duration-200 font-label-md text-label-md" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                Pengaturan
            </a>
        </nav>
        <div class="px-3 mt-auto">
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-error-container hover:text-error transition-colors duration-200 font-label-md text-label-md" href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                Keluar
            </a>
        </div>
    </aside>

    <header class="ml-64 h-16 bg-surface-container-lowest border-b border-outline-variant flex justify-between items-center px-margin-desktop sticky top-0 z-40">
        <div class="flex items-center gap-4 flex-1 max-w-xl">
            <div class="relative w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                <input class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:outline-none focus:border-primary text-body-md transition-all" placeholder="Cari transaksi, pelanggan, atau ID..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <button class="relative text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
            </button>
            
            <div class="flex items-center gap-3 pl-6 border-l border-outline-variant">
                <div class="text-right">
                    <p class="font-bold text-[16px] text-gray-900 tracking-wide">Admin User</p>
                    <p class="text-[11px] text-[#005eb8] uppercase tracking-wider font-semibold mt-0.5">Kepala Operasional</p>
                </div>
                <img alt="Profil Admin" class="w-11 h-11 rounded-[12px] object-cover shadow-sm border border-gray-200" src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=150&h=150"/>
            </div>
            </div>
    </header>

    <main class="ml-64 p-margin-desktop min-h-[calc(100vh-4rem)]">
        <header class="mb-6">
            <h2 class="font-headline-md text-headline-md text-primary mb-2">Daftar Transaksi</h2>
            <p class="font-body-md text-body-md text-on-surface-variant">Kelola riwayat pembayaran dan transaksi toko Anda secara efisien.</p>
        </header>

        @if(session('success'))
        <div class="mb-6 px-4 py-3 bg-secondary-container text-on-secondary-container rounded flex items-center gap-3">
            <span class="material-symbols-outlined">check_circle</span>
            <p class="font-label-md">{{ session('success') }}</p>
        </div>
        @endif

        <section class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-stack-lg">
            <div class="bg-surface-container-lowest p-6 border border-outline-variant rounded transition-all hover:shadow-lg hover:shadow-black/5 group">
                <div class="flex justify-between items-start mb-4">
                    <span class="material-symbols-outlined p-2 bg-surface-container text-primary rounded" data-icon="receipt_long">receipt_long</span>
                    <span class="text-secondary font-label-md">+12% Bulan Ini</span>
                </div>
                <h3 class="font-label-md text-label-md text-on-surface-variant mb-1">Total Transaksi</h3>
                <p class="font-headline-sm text-headline-sm text-primary">{{ $transaksis->total() ?? '0' }}</p>
            </div>
            <div class="bg-surface-container-lowest p-6 border border-outline-variant rounded transition-all hover:shadow-lg hover:shadow-black/5 group">
                <div class="flex justify-between items-start mb-4">
                    <span class="material-symbols-outlined p-2 bg-secondary-container text-secondary rounded" data-icon="payments">payments</span>
                    <span class="text-secondary font-label-md">+5.4%</span>
                </div>
                <h3 class="font-label-md text-label-md text-on-surface-variant mb-1">Pendapatan Keseluruhan</h3>
                <p class="font-headline-sm text-headline-sm text-primary">Cek Laporan</p>
            </div>
            <div class="bg-surface-container-lowest p-6 border border-outline-variant rounded transition-all hover:shadow-lg hover:shadow-black/5 group">
                <div class="flex justify-between items-start mb-4">
                    <span class="material-symbols-outlined p-2 bg-surface-container text-primary rounded" data-icon="check_circle">check_circle</span>
                    <span class="text-secondary font-label-md">Data Aktif</span>
                </div>
                <h3 class="font-label-md text-label-md text-on-surface-variant mb-1">Status Sistem</h3>
                <p class="font-headline-sm text-headline-sm text-primary">Normal</p>
            </div>
        </section>

        <div class="flex justify-between items-center mb-6">
            <div class="flex items-center gap-4">
                <button class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded bg-white font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">filter_list</span>
                    Filter
                </button>
                <button class="flex items-center gap-2 px-4 py-2 border border-outline-variant rounded bg-white font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                    Bulan Ini
                </button>
            </div>
            <div class="flex items-center gap-3">
                <button class="flex items-center gap-2 px-4 py-2.5 bg-white border border-outline-variant text-primary font-label-md text-label-md rounded uppercase tracking-wider hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[20px]">download</span>
                    Ekspor
                </button>
                <a href="{{ route('admin.transaksi.create') ?? '#' }}" class="flex items-center gap-2 px-6 py-2.5 bg-primary text-white font-label-md text-label-md rounded uppercase tracking-wider hover:opacity-90 transition-opacity">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    Tambah Transaksi
                </a>
            </div>
        </div>

        <div class="bg-surface-container-lowest border border-outline-variant rounded overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant">
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-widest">ID Transaksi</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-widest">ID Pelanggan</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-widest">Tanggal Pembayaran</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-widest text-right">Total Pembayaran</th>
                        <th class="px-6 py-4 font-label-md text-label-md text-on-surface-variant uppercase tracking-widest text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant">
                    @forelse ($transaksis ?? [] as $transaksi)
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-label-md text-primary">TRX-{{ str_pad($transaksi->id_transaksi ?? 0, 4, '0', STR_PAD_LEFT) }}</td>
                        
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded bg-secondary-container flex items-center justify-center text-[10px] text-on-secondary-container font-bold uppercase">
                                    {{ substr($transaksi->pelanggan->nama_pelanggan ?? 'NN', 0, 2) }}
                                </div>
                                <span class="font-body-md">{{ $transaksi->pelanggan->nama_pelanggan ?? 'ID: ' . ($transaksi->id_pelanggan ?? '-') }}</span>
                            </div>
                        </td>
                        
                        <td class="px-6 py-5 text-on-surface-variant">
                            {{ isset($transaksi->tanggal_pembayaran) ? \Carbon\Carbon::parse($transaksi->tanggal_pembayaran)->translatedFormat('d M Y') : '-' }}
                        </td>
                        
                        <td class="px-6 py-5 text-right font-label-md text-primary">
                            Rp {{ number_format($transaksi->total_pembayaran ?? 0, 0, ',', '.') }}
                        </td>
                        
                        <td class="px-6 py-5">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('admin.transaksi.edit', $transaksi->id_transaksi ?? 0) }}" class="p-2 hover:bg-surface-container rounded-full text-secondary transition-colors" title="Edit">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </a>
                                
                                <form action="{{ route('admin.transaksi.destroy', $transaksi->id_transaksi ?? 0) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus transaksi ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 hover:bg-error-container hover:text-error rounded-full text-on-surface-variant transition-colors" title="Hapus">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center font-body-md text-on-surface-variant">
                            Belum ada data transaksi yang dicatat.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            
            @if(isset($transaksis) && $transaksis->hasPages())
            <div class="px-6 py-4 bg-surface-container-low border-t border-outline-variant">
                {{ $transaksis->withQueryString()->links() }}
            </div>
            @endif
        </div>

        <section class="mt-section-gap grid grid-cols-1 md:grid-cols-2 gap-gutter">
            <div class="relative overflow-hidden rounded-xl h-64 border border-outline-variant group">
                <div class="absolute inset-0 z-0 bg-surface-container-high flex items-center justify-center">
                    <span class="material-symbols-outlined text-[80px] text-outline-variant">analytics</span>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                </div>
                <div class="absolute bottom-0 left-0 p-8 z-10">
                    <h4 class="font-headline-sm text-headline-sm text-white mb-2">Analisis Penjualan</h4>
                    <p class="text-white/80 font-body-md mb-4 max-w-sm">Dapatkan wawasan lebih dalam tentang perilaku belanja pelanggan Anda dengan laporan analitik otomatis.</p>
                    <button class="text-white font-label-md uppercase tracking-widest flex items-center gap-2 group/btn">
                        Buka Laporan <span class="material-symbols-outlined transition-transform group-hover/btn:translate-x-1">arrow_forward</span>
                    </button>
                </div>
            </div>
            <div class="bg-primary p-12 flex flex-col justify-center items-center text-center rounded-xl">
                <span class="material-symbols-outlined text-white text-[48px] mb-6" data-icon="support_agent">support_agent</span>
                <h4 class="font-headline-sm text-headline-sm text-white mb-4">Butuh Bantuan Transaksi?</h4>
                <p class="text-white/70 font-body-md mb-8 max-w-sm">Tim dukungan teknis kami siap membantu Anda 24/7 untuk setiap kendala pembayaran.</p>
                <button class="px-8 py-3 border-2 border-secondary text-secondary-fixed font-label-md uppercase tracking-widest rounded hover:bg-secondary hover:text-white transition-all">
                    Hubungi Admin
                </button>
            </div>
        </section>
    </main>

    <script>
        const searchInput = document.querySelector('input[type="text"]');
        if(searchInput) {
            searchInput.addEventListener('focus', () => {
                searchInput.parentElement.classList.add('ring-2', 'ring-primary/10');
            });
            searchInput.addEventListener('blur', () => {
                searchInput.parentElement.classList.remove('ring-2', 'ring-primary/10');
            });
        }
    </script>
</body>
</html>