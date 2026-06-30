<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Portal Akses Administrator | Bangun Mulyo</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet" />
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-[#fd761a] selection:text-white min-h-screen flex">

    <div class="hidden lg:flex lg:w-1/2 bg-[#183059] relative overflow-hidden items-center justify-center p-16">
        
        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1200&auto=format&fit=crop" 
             class="absolute inset-0 w-full h-full object-cover opacity-15 scale-105 animate-pulse-slow" alt="Gudang Bangun Mulyo">
        
        <div class="relative z-10 text-white max-w-lg space-y-8">
            
            <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white/10 border border-white/15 backdrop-blur-md text-amber-400 text-xs font-extrabold tracking-widest uppercase">
                <span class="material-symbols-outlined text-base animate-spin-slow">security</span>
                <span>RESTRICTED INTERNAL AREA</span>
            </div>

            <div class="space-y-4">
                <h1 class="text-4xl sm:text-5xl font-black tracking-tight leading-tight">
                    Pusat Kendali <br><span class="text-[#fd761a]">Logistik & Katalog.</span>
                </h1>
                <p class="text-slate-300 text-sm leading-relaxed font-normal">
                    Portal otentikasi terpusat bagi jajaran staf Bangun Mulyo. Gunakan hak akses Anda untuk memonitor arus kas pesanan, mengatur harga nota, dan memperbarui stok harian.
                </p>
            </div>

            <div class="pt-8 border-t border-white/15 grid grid-cols-2 gap-4 text-xs font-mono text-slate-300">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                    <span>Database: Oracle 19c</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-amber-400 text-sm">enhanced_encryption</span>
                    <span>SSL 256-Bit Encrypted</span>
                </div>
            </div>

        </div>

        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-[#fd761a]/20 rounded-full blur-3xl pointer-events-none"></div>
    </div>
    <div class="w-full lg:w-1/2 flex items-center justify-center p-6 sm:p-12 md:p-16 bg-white shadow-2xl z-10">
        <div class="w-full max-w-md space-y-8">
            
            <div class="space-y-2 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2.5 mb-4 lg:hidden">
                    <div class="w-9 h-9 rounded-xl bg-[#183059] text-white flex items-center justify-center font-black shadow-md shadow-[#183059]/30">BM</div>
                    <span class="font-black text-xl tracking-tight text-[#183059]">BANGUN MULYO</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-[#183059]">Login Staf Admin</h2>
                <p class="text-slate-500 text-xs sm:text-sm">Silakan masukkan kredensial akun yang telah didaftarkan</p>
            </div>

            @if (\App\Models\User::count() === 0)
                <div class="p-4 rounded-2xl bg-amber-50 border-2 border-amber-300 text-amber-900 text-xs sm:text-sm space-y-2 animate-bounce">
                    <div class="flex items-center gap-2 font-black text-amber-800 uppercase">
                        <span class="material-symbols-outlined text-lg text-amber-600">warning</span> Database Masih Kosong!
                    </div>
                    <p class="text-slate-600">Belum ada akun admin yang tercatat di Oracle. Anda tidak akan bisa login.</p>
                    <a href="{{ route('register') }}" class="block w-full text-center py-2.5 bg-[#fd761a] hover:bg-[#e06512] text-white font-bold rounded-xl shadow-md transition-all">
                        🚀 Klik di Sini Untuk Daftar Admin Pertama
                    </a>
                </div>
            @endif
            @if ($errors->any())
                <div class="p-4 rounded-2xl bg-rose-50 border border-rose-200 text-rose-700 text-xs space-y-1 animate-shake">
                    <div class="font-bold flex items-center gap-1.5 uppercase tracking-wider text-[11px]">
                        <span class="material-symbols-outlined text-base text-rose-600">gpp_bad</span> Akses Ditolak:
                    </div>
                    <ul class="list-disc list-inside pl-1 space-y-0.5 font-medium">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">Email Karyawan</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">mail</span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                               class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 bg-slate-50/50 text-sm font-semibold text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all" 
                               placeholder="admin@bangunmulyo.com">
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-center mb-1.5">
                        <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700">Kata Sandi</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs font-bold text-[#fd761a] hover:underline">Lupa sandi?</a>
                        @endif
                    </div>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-3 text-slate-400 text-lg select-none">key</span>
                        <input id="password" type="password" name="password" required autocomplete="current-password" 
                               class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 bg-slate-50/50 text-sm font-semibold text-slate-800 placeholder:text-slate-400 focus:bg-white focus:border-[#183059] focus:ring-2 focus:ring-[#183059]/20 outline-none transition-all" 
                               placeholder="••••••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-2.5 cursor-pointer group select-none">
                        <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 rounded text-[#183059] focus:ring-[#183059] border-slate-300 transition cursor-pointer">
                        <span class="text-xs font-semibold text-slate-600 group-hover:text-slate-900">Tetap masuk di perangkat ini</span>
                    </label>
                </div>

                <div class="pt-2">
                    <button type="submit" 
                            class="w-full py-4 bg-[#183059] hover:bg-[#112240] active:scale-[0.99] text-white font-extrabold text-xs uppercase tracking-widest rounded-xl shadow-xl shadow-[#183059]/20 transition-all flex items-center justify-center gap-2 group">
                        <span>Otorisasi & Masuk Panel</span>
                        <span class="material-symbols-outlined text-base text-[#fd761a] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </div>

            </form>

            <div class="pt-8 border-t border-slate-100 text-center">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-slate-400 hover:text-[#183059] transition-colors">
                    <span class="material-symbols-outlined text-sm">arrow_back</span>
                    <span>Kembali ke Halaman Publik Utama</span>
                </a>
            </div>

        </div>
    </div>
    </body>
</html>