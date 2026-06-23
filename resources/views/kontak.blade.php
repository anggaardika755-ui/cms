@extends('layouts.front')

@section('title', 'Kontak Kami | Bangun Mulyo')

@section('content')
<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
</style>

<main>
    <!-- Hero Section -->
    <section class="relative h-[400px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover brightness-[0.4]" alt="A wide-angle professional photograph of a modern, well-organized hardware store interior. The scene features rows of industrial shelving stocked with construction materials like cement, tools, and metal fixtures." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4t6yM3oOEVDhI1bL_iHIilLqs6VHVETYZW0Gy_Ko_dtvfF3UURzAoWUukAkyewj3_UJwKG1qo190SRjUVsyw2GS2RwiljsKMK7YH84Yko84VxiURWs96493gtLec01WvkK4r0Njvwnt2O0PBCcqosIXREop_vy7o-V42I5jaU8CNPSukS2syBYB1133adi9bOW6yjNYSAaJhlZxzND6JhLRGHpd4cUaLVHnf_qVXaPZgs7fntr-_8g_O1PgAAo8vEue23-hEfeSH2">
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-lg md:px-xl w-full">
            <div class="max-w-2xl mt-16">
                <h1 class="text-display-lg font-display-lg text-white mb-md">Hubungi Kami</h1>
                <p class="text-body-lg font-body-lg text-white/90">
                    Kami siap membantu kebutuhan material bangunan Anda. Hubungi tim kami untuk informasi produk, stok, harga, dan pemesanan.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Cards Section -->
    <section class="max-w-container-max mx-auto px-lg md:px-xl -mt-xl relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-md">
            <!-- Alamat -->
            <div class="bg-surface-container-lowest p-lg rounded-xl shadow-md border border-outline-variant flex flex-col items-center text-center hover:-translate-y-1 transition-transform">
                <div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center mb-md">
                    <span class="material-symbols-outlined text-primary">location_on</span>
                </div>
                <h3 class="font-label-md text-label-md text-primary mb-sm">Alamat Toko</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Jl. Raya Industri No. 45, Bandung, Jawa Barat</p>
            </div>
            <!-- Telepon -->
            <div class="bg-surface-container-lowest p-lg rounded-xl shadow-md border border-outline-variant flex flex-col items-center text-center hover:-translate-y-1 transition-transform">
                <div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center mb-md">
                    <span class="material-symbols-outlined text-primary">phone</span>
                </div>
                <h3 class="font-label-md text-label-md text-primary mb-sm">Telepon</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">+62 21 555 1234</p>
            </div>
            <!-- WhatsApp -->
            <div class="bg-surface-container-lowest p-lg rounded-xl shadow-md border border-outline-variant flex flex-col items-center text-center hover:-translate-y-1 transition-transform">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-md">
                    <span class="material-symbols-outlined text-green-700">chat</span>
                </div>
                <h3 class="font-label-md text-label-md text-primary mb-sm">WhatsApp</h3>
                <button class="mt-sm px-md py-sm bg-green-600 text-white rounded-lg text-label-md font-label-md hover:bg-green-700 transition-colors">Chat WhatsApp</button>
            </div>
            <!-- Email -->
            <div class="bg-surface-container-lowest p-lg rounded-xl shadow-md border border-outline-variant flex flex-col items-center text-center hover:-translate-y-1 transition-transform">
                <div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center mb-md">
                    <span class="material-symbols-outlined text-primary">mail</span>
                </div>
                <h3 class="font-label-md text-label-md text-primary mb-sm">Email</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">kontak@bangunmulyo.com</p>
            </div>
            <!-- Jam Operasional -->
            <div class="bg-surface-container-lowest p-lg rounded-xl shadow-md border border-outline-variant flex flex-col items-center text-center hover:-translate-y-1 transition-transform">
                <div class="w-12 h-12 bg-secondary-fixed rounded-full flex items-center justify-center mb-md">
                    <span class="material-symbols-outlined text-secondary">schedule</span>
                </div>
                <h3 class="font-label-md text-label-md text-primary mb-sm">Jam Operasional</h3>
                <p class="font-body-md text-body-md text-on-surface-variant">Senin – Sabtu<br>08.00 – 17.00 WIB</p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="max-w-container-max mx-auto px-lg md:px-xl py-xl mt-xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-xl">
            <!-- Left: Content -->
            <div class="flex flex-col justify-center scroll-reveal">
                <span class="text-secondary font-label-md text-label-md uppercase tracking-wider mb-sm">Hubungi Kami</span>
                <h2 class="text-headline-lg font-headline-lg text-primary mb-md">Kirim Pesan</h2>
                <p class="text-body-lg font-body-lg text-on-surface-variant mb-lg max-w-lg">
                    Punya pertanyaan khusus atau membutuhkan penawaran harga untuk proyek Anda? Isi formulir di samping dan tim ahli kami akan menghubungi Anda dalam 1x24 jam kerja.
                </p>
                <div class="space-y-md">
                    <div class="flex items-start gap-md">
                        <span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
                        <div>
                            <h4 class="font-label-md text-label-md text-primary">Konsultasi Gratis</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">Diskusikan kebutuhan material dengan ahli kami.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-md">
                        <span class="material-symbols-outlined text-secondary mt-1">check_circle</span>
                        <div>
                            <h4 class="font-label-md text-label-md text-primary">Penawaran Cepat</h4>
                            <p class="font-body-md text-body-md text-on-surface-variant">Dapatkan estimasi biaya untuk proyek skala besar.</p>
                        </div>
                    </div>
                </div>
            </div>

           <!-- Right: Form -->
<div class="bg-white p-xl rounded-2xl shadow-lg border border-outline-variant scroll-reveal">
    
    {{-- Notifikasi Sukses --}}
    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg text-center font-medium">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('kontak.kirim') }}" method="POST" class="space-y-md">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
            <div class="space-y-sm">
                <label class="font-label-md text-label-md text-primary">Nama Lengkap</label>
                <input name="nama_lengkap" required class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="John Doe" type="text">
            </div>
            <div class="space-y-sm">
                <label class="font-label-md text-label-md text-primary">Email</label>
                <input name="email" required class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="john@email.com" type="email">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
            <div class="space-y-sm">
                <label class="font-label-md text-label-md text-primary">Nomor Telepon</label>
                <input name="nomor_telepon" required class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="+62 812..." type="tel">
            </div>
            <div class="space-y-sm">
                <label class="font-label-md text-label-md text-primary">Subjek Pesan</label>
                <select name="subjek" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none">
                    <option value="Informasi Stok">Informasi Stok</option>
                    <option value="Penawaran Harga">Penawaran Harga</option>
                    <option value="Kerjasama Proyek">Kerjasama Proyek</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="space-y-sm">
            <label class="font-label-md text-label-md text-primary">Pesan</label>
            <textarea name="pesan" required class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-md focus:ring-2 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="Tuliskan pesan Anda di sini..." rows="4"></textarea>
        </div>
        <button class="w-full py-md bg-primary text-on-primary font-label-md text-label-md rounded-lg hover:bg-primary-container transition-all flex items-center justify-center gap-sm" type="submit">
            Kirim Pesan
            <span class="material-symbols-outlined text-sm">send</span>
        </button>
    </form>
</div>
    <!-- Location Section -->
    <section class="bg-surface-container-low py-xl scroll-reveal">
        <div class="max-w-container-max mx-auto px-lg md:px-xl">
            <div class="rounded-2xl overflow-hidden shadow-lg border border-outline-variant h-[450px] relative">
                <div class="absolute inset-0 bg-gray-200">
                    <!-- Mock Map with Illustration -->
                    <img class="w-full h-full object-cover opacity-50 grayscale" alt="A stylized aerial map view of an industrial and commercial district in Bandung, West Java." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGVlTbnDjukqEw4RknBTY1HnWUNiRYXf7ENo27ubXCsO9wnu5Hs7KIkLxOSfdAWptyafrcj4Ev4Bg2ofgymcywwnetKd1GnbFsw9_cBPqMjelCyEP-RpHVebTti3v0umA4Yw9bMDN8V9CIfPtWjwXq0vgRJ-y3wwFKoinbPA0PsQ5m8aU4MbigNJO-HM4I0mINyp0soiT70XXVtVqr8P8VVK96Y-3I74C2TOiiJI-OllpfCUbaJXmKEDevwiwfLKCHCfg1X03fdAX5">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-white p-md rounded-full shadow-2xl animate-bounce">
                            <span class="material-symbols-outlined text-secondary text-4xl" style="font-variation-settings: 'FILL' 1;">location_on</span>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-lg left-lg right-lg md:left-xl md:right-auto md:w-96 glass-card p-lg rounded-xl">
                    <h4 class="font-headline-md text-headline-md text-primary mb-xs">Lokasi Kami</h4>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-md">Jl. Raya Industri No. 45, Terusan Pasteur, Bandung, Jawa Barat 40161</p>
                    <a class="inline-flex items-center gap-xs text-primary font-label-md text-label-md hover:underline" href="#">
                        Petunjuk Arah <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="max-w-container-max mx-auto px-lg md:px-xl py-xl scroll-reveal">
        <div class="text-center mb-xl">
            <h2 class="text-headline-lg font-headline-lg text-primary mb-sm">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-body-md font-body-md text-on-surface-variant">Temukan jawaban cepat untuk pertanyaan umum mengenai layanan kami.</p>
        </div>
        <div class="max-w-3xl mx-auto space-y-md">
            <!-- FAQ Item 1 -->
            <details class="group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden" open="">
                <summary class="flex justify-between items-center p-lg cursor-pointer list-none hover:bg-surface-container transition-colors">
                    <span class="font-label-md text-label-md text-primary">Apakah bisa melayani pemesanan dalam jumlah besar?</span>
                    <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                </summary>
                <div class="p-lg pt-0 text-body-md font-body-md text-on-surface-variant border-t border-outline-variant">
                    Ya, kami melayani pemesanan skala besar (bulk order) untuk kontraktor dan proyek pembangunan. Kami menyediakan harga khusus grosir untuk pembelian volume tinggi.
                </div>
            </details>
            <!-- FAQ Item 2 -->
            <details class="group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                <summary class="flex justify-between items-center p-lg cursor-pointer list-none hover:bg-surface-container transition-colors">
                    <span class="font-label-md text-label-md text-primary">Apakah tersedia layanan pengiriman?</span>
                    <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                </summary>
                <div class="p-lg pt-0 text-body-md font-body-md text-on-surface-variant border-t border-outline-variant">
                    Kami menyediakan armada pengiriman sendiri (truk engkel/fuso) untuk area Bandung dan sekitarnya. Untuk pengiriman luar kota, kami bekerja sama dengan ekspedisi logistik terpercaya.
                </div>
            </details>
            <!-- FAQ Item 3 -->
            <details class="group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                <summary class="flex justify-between items-center p-lg cursor-pointer list-none hover:bg-surface-container transition-colors">
                    <span class="font-label-md text-label-md text-primary">Bagaimana cara mengetahui stok produk?</span>
                    <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                </summary>
                <div class="p-lg pt-0 text-body-md font-body-md text-on-surface-variant border-t border-outline-variant">
                    Anda dapat menanyakan stok secara real-time melalui fitur Chat WhatsApp kami atau menelpon langsung ke nomor layanan pelanggan kami di jam operasional.
                </div>
            </details>
            <!-- FAQ Item 4 -->
            <details class="group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                <summary class="flex justify-between items-center p-lg cursor-pointer list-none hover:bg-surface-container transition-colors">
                    <span class="font-label-md text-label-md text-primary">Apakah bisa meminta penawaran harga?</span>
                    <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                </summary>
                <div class="p-lg pt-0 text-body-md font-body-md text-on-surface-variant border-t border-outline-variant">
                    Tentu. Kirimkan daftar material yang Anda butuhkan melalui email atau formulir kontak di atas, dan tim sales kami akan mengirimkan Quotation resmi dalam waktu singkat.
                </div>
            </details>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="max-w-container-max mx-auto px-lg md:px-xl mb-xl scroll-reveal">
        <div class="bg-primary-container rounded-3xl p-xl md:p-24 relative overflow-hidden flex flex-col items-center text-center">
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-secondary opacity-20 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-tertiary-fixed opacity-10 rounded-full translate-y-1/2 -translate-x-1/2 blur-2xl"></div>
            
            <h2 class="text-display-lg font-display-lg text-white mb-md relative z-10">Butuh Material Bangunan untuk Proyek Anda?</h2>
            <p class="text-body-lg font-body-lg text-white/80 mb-xl max-w-2xl relative z-10">
                Hubungi tim kami sekarang untuk mendapatkan informasi produk dan penawaran terbaik. Kami siap menjadi mitra konstruksi Anda.
            </p>
            <div class="flex flex-col sm:flex-row gap-md relative z-10">
                <button class="px-xl py-md bg-secondary text-on-secondary font-label-md text-label-md rounded-xl hover:scale-105 transition-transform flex items-center justify-center gap-sm shadow-lg">
                    <span class="material-symbols-outlined">chat</span>
                    Hubungi via WhatsApp
                </button>
                <a href="{{ route('produk.front') }}" class="px-xl py-md bg-white text-primary font-label-md text-label-md rounded-xl hover:bg-surface-container-high transition-colors flex items-center justify-center gap-sm shadow-md">
                    <span class="material-symbols-outlined">grid_view</span>
                    Lihat Produk
                </a>
            </div>
        </div>
    </section>
</main>
@endsection