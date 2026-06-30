<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\PelangganController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\TransaksiController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\HeroController;

/*
|--------------------------------------------------------------------------
| Front-end Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/profil-toko', [FrontController::class, 'profil'])->name('profil');

Route::get('/produk', [FrontController::class, 'produk'])->name('produk.front');

Route::get('/produk/{id}', [FrontController::class, 'show'])->name('produk.show');

/*
| Halaman Kontak
| Perhatikan method yang dipanggil adalah kontak(), bukan indexKontak()
*/
Route::get('/kontak', [FrontController::class, 'kontak'])->name('kontak');

Route::post('/kontak/kirim', [FrontController::class, 'kirimPesan'])->name('kontak.kirim');

Route::get('/kami', function () {
    return view('kami');
})->name('kami');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware(['auth', 'verified'])
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'dashboard'])
            ->name('dashboard.index');

        Route::get('/hero', [HeroController::class, 'edit'])
            ->name('hero.edit');

        Route::put('/hero', [HeroController::class, 'update'])
            ->name('hero.update');

        Route::resource('pelanggan', PelangganController::class);

        Route::resource('produk', ProdukController::class);

        Route::resource('transaksi', TransaksiController::class);

        // Pesan Masuk
        Route::get('/kontak', [KontakController::class, 'index'])
            ->name('kontak.index');

        Route::get('/kontak/{id}', [KontakController::class, 'show'])
            ->name('kontak.show');

        Route::delete('/kontak/{id}', [KontakController::class, 'destroy'])
            ->name('kontak.destroy');
    });

/*
|--------------------------------------------------------------------------
| Dashboard Redirect
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__ . '/auth.php';