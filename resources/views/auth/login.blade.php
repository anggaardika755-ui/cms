<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    
    <title>Login Admin | Bangun Mulyo</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary": "#1e3a8a",
                    "primary-container": "#1e3a8a",
                    "on-primary": "#ffffff",
                    "secondary": "#fd761a",
                    "on-secondary": "#ffffff",
                    "background": "#f7f9fb",
                    "on-background": "#191c1e",
                    "surface": "#f7f9fb",
                    "on-surface": "#191c1e",
                    "surface-variant": "#e0e3e5",
                    "on-surface-variant": "#444651",
                    "outline": "#757682",
                    "outline-variant": "#c5c5d3",
                    "error": "#ba1a1a",
                    "on-error": "#ffffff",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-low": "#f2f4f6",
            },
            "fontFamily": {
                    "body-md": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-md": ["Inter"],
                    "display-lg": ["Inter"]
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
        .bg-pattern {
            background-color: #1e3a8a;
            background-image: radial-gradient(#ffffff 1px, transparent 1px);
            background-size: 30px 30px;
            background-position: 0 0, 15px 15px;
            opacity: 0.95;
        }
    </style>
</head>

<body class="bg-surface text-on-surface h-screen flex items-center justify-center relative overflow-hidden">

    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover brightness-[0.3]" alt="Warehouse background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoLRqhJRtZBQSrP8oZVsfTcTBCe0kROILQ0oSOAgZ9DrHzvoX4zdORdtF6aLKE-FCdHyK7zUVA5EUx5FvSA55jqLxBvx6S0MYDWHIZmOANjE2w7H45NCoPsy5IHwCgSPTX7ULuGTDtX5dfLMrUtANsWSGvNubo73pDg51I6EXK96_K81rJbFZBtkoO4ReF9X-0ElP04c1yxLTEGwYEiLgS4TXnndBZ6NMCV6iNY5gQPI5N6OoidjGnrzP7YS7NOUbUmG9vxO5DqAGd"/>
        <div class="absolute inset-0 bg-primary/80 backdrop-blur-[2px]"></div>
    </div>

    <div class="absolute -top-32 -left-32 w-96 h-96 bg-secondary rounded-full opacity-20 blur-3xl z-0"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-white rounded-full opacity-10 blur-3xl z-0"></div>

    <div class="relative z-10 w-full max-w-md bg-surface-container-lowest rounded-2xl shadow-2xl overflow-hidden border border-white/20 mx-4">
        
        <div class="p-8 pb-6 text-center border-b border-outline-variant/30 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-secondary"></div>
            <div class="w-16 h-16 bg-primary-container/10 rounded-full flex items-center justify-center mx-auto mb-4 text-primary">
                <span class="material-symbols-outlined text-4xl">admin_panel_settings</span>
            </div>
            <h1 class="font-display-lg text-2xl font-bold text-primary mb-1">Bangun Mulyo</h1>
            <p class="font-body-md text-sm text-on-surface-variant">Sistem Manajemen Toko</p>
        </div>

        <div class="p-8 pt-6">
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block font-label-md text-sm font-semibold text-primary mb-2">Alamat Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-xl">mail</span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                               class="w-full pl-10 pr-4 py-3 rounded-xl border {{ $errors->has('email') ? 'border-error focus:ring-error' : 'border-outline-variant focus:ring-primary focus:border-primary' }} bg-surface focus:ring-2 transition-all outline-none" 
                               placeholder="admin@bangunmulyo.com">
                    </div>
                    @error('email')
                        <p class="text-error text-xs mt-1 font-medium flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">error</span> {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block font-label-md text-sm font-semibold text-primary">Kata Sandi</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs font-label-md text-secondary hover:underline transition-colors">Lupa sandi?</a>
                        @endif
                    </div>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-xl">lock</span>
                        <input id="password" type="password" name="password" required autocomplete="current-password" 
                               class="w-full pl-10 pr-4 py-3 rounded-xl border {{ $errors->has('password') ? 'border-error focus:ring-error' : 'border-outline-variant focus:ring-primary focus:border-primary' }} bg-surface focus:ring-2 transition-all outline-none" 
                               placeholder="••••••••">
                    </div>
                    @error('password')
                        <p class="text-error text-xs mt-1 font-medium flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">error</span> {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex items-center pt-2">
                    <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 text-primary bg-surface border-outline-variant rounded focus:ring-primary focus:ring-2 cursor-pointer">
                    <label for="remember_me" class="ml-2 block text-sm font-body-md text-on-surface-variant cursor-pointer">Ingat sesi saya</label>
                </div>

                <button type="submit" class="w-full py-3 mt-4 bg-primary text-white font-label-md text-base rounded-xl hover:bg-opacity-90 hover:-translate-y-[1px] transition-all flex items-center justify-center gap-2 shadow-md">
                    Masuk ke Dashboard <span class="material-symbols-outlined text-lg">login</span>
                </button>
            </form>
        </div>
        
        <div class="p-4 bg-surface-container-low text-center border-t border-outline-variant/30">
            <a href="{{ route('home') }}" class="text-sm font-label-md text-on-surface-variant hover:text-primary transition-colors inline-flex items-center justify-center gap-1">
                <span class="material-symbols-outlined text-[16px]">arrow_back</span> Kembali ke Halaman Utama
            </a>
        </div>
        
    </div>

</body>
</html>