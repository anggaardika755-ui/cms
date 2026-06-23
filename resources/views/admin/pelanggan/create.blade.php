<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tambah Pelanggan Baru - Bangun Mulyo</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,600;0,8..60,700;1,8..60,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script id="tailwind-config">
        // Konfigurasi Tailwind dibiarkan sama persis dengan buatanmu
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed": "#131b2e", "surface-container": "#eceef0", "on-secondary-fixed": "#002117",
                        "on-primary": "#ffffff", "surface": "#f7f9fb", "inverse-surface": "#2d3133", "surface-dim": "#d8dadc",
                        "on-tertiary": "#ffffff", "secondary": "#2b6954", "surface-tint": "#565e74", "on-surface-variant": "#45464d",
                        "on-secondary": "#ffffff", "secondary-container": "#adedd3", "outline": "#76777d", "on-background": "#191c1e",
                        "on-tertiary-fixed": "#331200", "on-secondary-fixed-variant": "#0b513d", "on-surface": "#191c1e",
                        "surface-container-high": "#e6e8ea", "inverse-primary": "#bec6e0", "primary-container": "#131b2e",
                        "surface-variant": "#e0e3e5", "tertiary-fixed": "#ffdbca", "surface-container-lowest": "#ffffff",
                        "on-primary-fixed-variant": "#3f465c", "secondary-fixed-dim": "#95d3ba", "primary-fixed": "#dae2fd",
                        "on-error-container": "#93000a", "inverse-on-surface": "#eff1f3", "on-error": "#ffffff",
                        "error-container": "#ffdad6", "outline-variant": "#c6c6cd", "secondary-fixed": "#b0f0d6",
                        "primary-fixed-dim": "#bec6e0", "background": "#f7f9fb", "on-secondary-container": "#306d58",
                        "on-tertiary-fixed-variant": "#763300", "on-primary-container": "#7c839b", "surface-container-low": "#f2f4f6",
                        "surface-bright": "#f7f9fb", "surface-container-highest": "#e0e3e5", "tertiary-fixed-dim": "#ffb68e",
                        "error": "#ba1a1a", "tertiary": "#000000", "on-tertiary-container": "#cf6721", "tertiary-container": "#331200",
                        "primary": "#000000"
                    },
                    "borderRadius": { "DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem" },
                    "spacing": { "section-gap": "80px", "margin-mobile": "20px", "stack-sm": "8px", "gutter": "24px", "stack-lg": "32px", "margin-desktop": "48px", "container-max": "1280px", "stack-md": "16px" },
                    "fontFamily": { "label-sm": ["Hanken Grotesk"], "display-lg-mobile": ["\"Source Serif 4\""], "body-md": ["Hanken Grotesk"], "display-lg": ["\"Source Serif 4\""], "label-md": ["Hanken Grotesk"], "headline-sm": ["\"Source Serif 4\""], "body-lg": ["Hanken Grotesk"], "headline-md": ["\"Source Serif 4\""] },
                    "fontSize": { "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}], "display-lg-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}], "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}], "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}], "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}], "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}], "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}], "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "600"}] }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        body { background-color: #f7f9fb; color: #191c1e; }
        .luxury-card { background: #ffffff; border: 1px solid #e0e3e5; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .luxury-card:hover { box-shadow: 0px 4px 20px rgba(0,0,0,0.05); }
        .form-input { border: 1px solid #e0e3e5; border-radius: 2px; padding: 12px 16px; transition: border-color 0.2s ease; }
        .form-input:focus { border-color: #000000; outline: none; box-shadow: none; }
        .input-error { border-color: #ba1a1a; }
    </style>
</head>
<body class="font-body-md text-body-md overflow-x-hidden">

    <aside class="h-screen w-64 fixed left-0 top-0 bg-surface-container-low border-r border-outline-variant flex flex-col p-stack-md space-y-stack-sm z-40 overflow-y-auto">
        <div class="mb-stack-lg px-3 mt-2">
            <h1 class="font-headline-sm text-headline-sm font-bold text-primary">Bangun Mulyo</h1>
            <p class="font-label-sm text-label-sm text-on-surface-variant opacity-70">Panel Admin</p>
        </div>
        
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-stack-md bg-secondary-container text-on-secondary-container p-3 font-label-md text-label-md rounded-md shadow-sm" href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Ringkasan</span>
            </a>
            
            <a class="flex items-center gap-stack-md text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant rounded-md transition-colors" href="{{ route('admin.pelanggan.index') }}">
                <span class="material-symbols-outlined">group</span>
                <span>Pelanggan</span>
            </a>

            <a class="flex items-center gap-stack-md text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant rounded-md transition-colors" href="#">
                <span class="material-symbols-outlined">inventory_2</span>
                <span>Produk</span>
            </a>

            <a class="flex items-center gap-stack-md text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant rounded-md transition-colors" href="#">
                <span class="material-symbols-outlined">receipt_long</span>
                <span>Transaksi</span>
            </a>

            <a class="flex items-center gap-stack-md text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant rounded-md transition-colors" href="#">
                <span class="material-symbols-outlined">receipt</span>
                <span>Detail Transaksi</span>
            </a>

            <a class="flex items-center gap-stack-md text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant rounded-md transition-colors" href="#">
                <span class="material-symbols-outlined">settings</span>
                <span>Pengaturan</span>
            </a>
        </nav>

        <div class="mt-auto flex flex-col space-y-4 pt-4">
            <hr class="border-outline-variant">
            <button class="w-full bg-black text-white font-bold py-3 rounded-sm text-sm tracking-wider hover:opacity-90 transition-opacity">
                TAMBAH PRODUK
            </button>
            <a class="flex items-center gap-stack-md text-on-surface-variant p-3 font-label-md text-label-md hover:bg-surface-variant rounded-md transition-colors" href="#">
                <span class="material-symbols-outlined">logout</span>
                <span>Keluar</span>
            </a>
        </div>
    </aside>
    <main class="ml-64 min-h-screen bg-surface">
        
        <header class="h-20 px-margin-desktop flex items-center justify-between border-b border-outline-variant bg-surface-container-lowest">
            <div>
                <nav class="flex text-on-surface-variant font-label-sm text-label-sm gap-2">
                    <span class="hover:text-primary cursor-pointer">Admin</span><span>/</span>
                    <a href="{{ route('admin.pelanggan.index') }}" class="hover:text-primary cursor-pointer">Pelanggan</a><span>/</span>
                    <span class="text-primary font-bold">Tambah Baru</span>
                </nav>
            </div>
            <div class="flex items-center gap-stack-md">
                <div class="text-right">
                    <p class="font-label-md text-label-md font-bold">Admin User</p>
                    <p class="font-label-sm text-label-sm text-on-surface-variant">Manager</p>
                </div>
                <div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center overflow-hidden">
                    <img alt="Admin Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5mdkBfpOERu4iapByNq5b36M_YZPINlxiOLY-2Xc4tRVt4daKNVZModcHPotCJZs_I95ZkXnE6q7xU5GPMgX9ps1OcZG8hUDcr7roZHg0-7-GIFPrr_M945Dl-i3FR3gYLRYl89EWK82xHKRk0HxedzfuKwjsTtx9E434GThXGpbxKgBGc_X6SbPBT66AcYLVR2od_uZfg63pUlCPNJIUotbVDGolYc0CV-2L092wP0oTLx_sMw7L_48e4udMXSRBacJG6BwArQ">
                </div>
            </div>
        </header>

        <section class="p-margin-desktop max-w-4xl mx-auto">
            <div class="mb-stack-lg">
                <h2 class="font-headline-md text-headline-md text-primary mb-2">Tambah Pelanggan Baru</h2>
                <p class="text-on-surface-variant">Lengkapi informasi di bawah ini untuk mendaftarkan pelanggan baru ke dalam sistem Bangun Mulyo.</p>
            </div>

            <div class="luxury-card p-margin-desktop rounded-lg">
                
                <form action="{{ route('admin.pelanggan.store') }}" method="POST" class="space-y-stack-lg">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                        <div class="flex flex-col gap-2">
                            <label class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant" for="customer-id">ID Pelanggan</label>
                            <input class="form-input bg-surface-container text-on-surface-variant cursor-not-allowed font-mono" id="customer-id" readonly type="text" value="Auto-Generate">
                            <span class="text-[11px] text-on-surface-variant italic">ID dihasilkan secara otomatis oleh database.</span>
                        </div>
                        
                        <div class="flex flex-col gap-2">
                            <label class="font-label-md text-label-md uppercase tracking-wider text-primary" for="customer-name">Nama Pelanggan</label>
                            <input class="form-input @error('nama_pelanggan') input-error @enderror" name="nama_pelanggan" id="customer-name" placeholder="Masukkan nama lengkap..." required type="text" value="{{ old('nama_pelanggan') }}">
                            @error('nama_pelanggan')
                                <span class="text-[12px] text-error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                        <div class="flex flex-col gap-2">
                            <label class="font-label-md text-label-md uppercase tracking-wider text-primary" for="phone-number">Nomor Telepon</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">+62</span>
                                <input class="form-input w-full pl-12 @error('no_telepon') input-error @enderror" name="no_telepon" id="phone-number" placeholder="812 3456 7890" required type="tel" value="{{ old('no_telepon') }}">
                            </div>
                            @error('no_telepon')
                                <span class="text-[12px] text-error">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="flex flex-col gap-2 opacity-50">
                            <label class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Status Akun</label>
                            <div class="flex items-center h-full">
                                <span class="inline-flex items-center px-3 py-1 bg-secondary-container text-on-secondary-container rounded-sm font-label-sm text-label-sm">AKTIF (DEFAULT)</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="font-label-md text-label-md uppercase tracking-wider text-primary" for="address">Alamat Lengkap</label>
                        <textarea class="form-input resize-none @error('alamat') input-error @enderror" name="alamat" id="address" placeholder="Jl. Raya Bangun Mulyo No. 12..." required rows="4">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <span class="text-[12px] text-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="pt-stack-lg border-t border-outline-variant flex flex-col md:flex-row justify-end gap-gutter mt-stack-lg">
                        
                        <a href="{{ route('admin.pelanggan.index') }}" class="px-8 py-3 border border-secondary text-secondary text-center font-label-md text-label-md uppercase tracking-widest hover:bg-secondary-container transition-colors duration-300">
                            Batal
                        </a>
                        
                        <button class="px-8 py-3 bg-primary text-on-primary font-label-md text-label-md uppercase tracking-widest hover:opacity-90 transition-opacity shadow-lg flex justify-center items-center gap-2" type="submit" id="btn-submit">
                            Simpan Pelanggan
                        </button>
                    </div>
                </form>
            </div>

            <div class="mt-stack-lg flex items-start gap-4 p-4 bg-surface-container-high rounded-sm">
                <span class="material-symbols-outlined text-secondary" data-icon="info">info</span>
                <p class="text-label-sm font-label-sm text-on-surface-variant">
                    <span class="font-bold text-primary">Informasi:</span> Pelanggan yang baru ditambahkan akan secara otomatis disimpan ke dalam database.
                </p>
            </div>
        </section>

        <footer class="mt-auto py-stack-lg border-t border-outline-variant px-margin-desktop">
            <div class="flex flex-col md:flex-row justify-between items-center text-on-surface-variant opacity-60">
                <p class="font-body-md text-label-sm">© 2024 Bangun Mulyo. Hak Cipta Dilindungi.</p>
            </div>
        </footer>
    </main>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const btn = document.getElementById('btn-submit');
            btn.innerText = "MENYIMPAN...";
            btn.disabled = true;
        });

        const inputs = document.querySelectorAll('.form-input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.querySelector('label').classList.add('text-primary');
            });
            input.addEventListener('blur', () => {
                if (!input.value) {
                    input.parentElement.querySelector('label').classList.remove('text-primary');
                }
            });
        });
    </script>
</body>
</html>