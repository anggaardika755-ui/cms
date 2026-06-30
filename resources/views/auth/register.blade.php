<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Administrator | Bangun Mulyo CMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased">

    <div class="flex min-h-screen">
        
        <div class="relative hidden w-1/2 items-center justify-center bg-[#183059] p-12 lg:flex overflow-hidden">
            <img src="https://images.unsplash.com/photo-1504307651591-00dcc993a460?q=80&w=1000&auto=format&fit=crop" 
                 class="absolute inset-0 h-full w-full object-cover opacity-20" alt="Gudang Material Bangun Mulyo">
            
            <div class="relative z-10 max-w-lg space-y-6 text-white">
                <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1.5 text-xs font-semibold tracking-wider text-amber-400 backdrop-blur-md border border-white/10">
                    <span class="material-symbols-outlined text-sm">engineering</span>
                    INTERNAL MANAGEMENT PORTAL
                </div>
                
                <h1 class="text-4xl font-black tracking-tight text-white sm:text-5xl leading-tight">
                    Kendali Katalog <br><span class="text-amber-400">Material & Stok.</span>
                </h1>
                
                <p class="text-sm leading-relaxed text-slate-300">
                    Sistem otorisasi terpusat bagi staf Bangun Mulyo untuk memperbarui fluktuasi harga semen, memantau ketersediaan cat harian, serta meninjau pesan masuk dari calon pembeli.
                </p>

                <div class="flex items-center gap-6 pt-6 border-t border-white/10 text-xs text-slate-400">
                    <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-amber-400 text-base">verified</span>
                        <span>Standar SNI</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-amber-400 text-base">database</span>
                        <span>Oracle Database</span>
                    </div>
                </div>
            </div>

            <div class="absolute -bottom-24 -right-24 h-80 w-80 rounded-full bg-amber-500/15 blur-3xl pointer-events-none"></div>
        </div>

        <div class="flex w-full items-center justify-center bg-white p-8 sm:p-12 lg:w-1/2">
            <div class="w-full max-w-md space-y-8">
                
                <div>
                    <div class="flex items-center gap-2 lg:hidden mb-6">
                        <div class="h-8 w-8 rounded-lg bg-[#183059] flex items-center justify-center font-bold text-white tracking-tighter">BM</div>
                        <span class="font-extrabold text-lg text-[#183059]">Bangun Mulyo</span>
                    </div>
                    <h2 class="text-2xl font-black tracking-tight text-[#183059] sm:text-3xl">Registrasi Staf Admin</h2>
                    <p class="mt-1.5 text-sm text-slate-500">Daftarkan kredensial baru untuk mengakses panel toko</p>
                </div>

                @if ($errors->any())
                    <div class="rounded-xl bg-red-50 p-4 border border-red-200">
                        <div class="flex items-center gap-1.5 text-red-800 font-bold text-xs uppercase tracking-wider mb-1">
                            <span class="material-symbols-outlined text-base">gpp_bad</span> Registrasi Bermasalah:
                        </div>
                        <ul class="list-disc list-inside text-xs text-red-600 space-y-0.5 pl-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Nama Lengkap Staf</label>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"
                               class="block w-full rounded-xl border border-slate-200 bg-slate-50 p-3.5 text-sm text-slate-800 transition focus:border-[#183059] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#183059]/20"
                               placeholder="Contoh: Budi Santoso (Admin Gudang)" />
                        @error('name')
                            <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Email Internal Toko</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                               class="block w-full rounded-xl border border-slate-200 bg-slate-50 p-3.5 text-sm text-slate-800 transition focus:border-[#183059] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#183059]/20"
                               placeholder="admin@bangunmulyo.com" />
                        @error('email')
                            <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5 pt-1">
                        <div>
                            <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Password</label>
                            <input id="password" type="password" name="password" required autocomplete="new-password"
                                   class="block w-full rounded-xl border border-slate-200 bg-slate-50 p-3.5 text-sm text-slate-800 transition focus:border-[#183059] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#183059]/20"
                                   placeholder="Min. 8 Karakter" />
                            @error('password')
                                <p class="mt-1 text-xs font-semibold text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1">Ulangi Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"
                                   class="block w-full rounded-xl border border-slate-200 bg-slate-50 p-3.5 text-sm text-slate-800 transition focus:border-[#183059] focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#183059]/20"
                                   placeholder="Ketik ulang" />
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" 
                                class="flex w-full items-center justify-center gap-2 rounded-xl bg-[#183059] py-4 text-sm font-bold text-white shadow-lg shadow-[#183059]/25 transition hover:bg-[#122340] active:scale-[0.99] group">
                            <span>Daftarkan & Buka Panel</span>
                            <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </button>
                    </div>
                </form>

                <div class="text-center border-t border-slate-100 pt-6">
                    <p class="text-xs text-slate-500">
                        Sudah memiliki hak akses? 
                        <a href="{{ route('login') }}" class="font-bold text-[#183059] hover:underline">Masuk ke Dashboard</a>
                    </p>
                </div>

            </div>
        </div>

    </div>

</body>
</html>