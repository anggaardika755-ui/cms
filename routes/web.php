<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\ProdukController; 
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\HeroController; // <-- [TAMBAHAN 1] Import Controller Hero

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- Front-end Routes ---
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/produk', [FrontController::class, 'produk'])->name('produk.front');
Route::get('/produk/{id}', [FrontController::class, 'show'])->name('produk.show');
Route::get('/kontak', [FrontController::class, 'kontak'])->name('kontak');
Route::post('/kontak/kirim', [FrontController::class, 'kirimPesan'])->name('kontak.kirim');
Route::get('/kami', function () { 
    return view('kami'); 
})->name('kami');

// --- Admin Routes ---
// URL: /admin/...
Route::prefix('admin')->middleware(['auth', 'verified'])->name('admin.')->group(function () {
    
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');
    
    // Kontrol Halaman Home (Hero Banner) <-- [TAMBAHAN 2]
    Route::get('/hero', [HeroController::class, 'edit'])->name('hero.edit');
    Route::put('/hero', [HeroController::class, 'update'])->name('hero.update');
    
    // Resource Routes
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('transaksi', TransaksiController::class); 
    
    // Admin Pesan Masuk
    Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
});

// --- Dashboard Redirect (Alias) ---
// Memungkinkan akses melalui http://127.0.0.1:8000/dashboard
Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// --- Auth & Profile Routes ---
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- Auth Routes (Login, Register, dll) ---
require __DIR__.'/auth.php';