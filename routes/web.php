<?php

use App\Http\Controllers\PortfolioController;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Route;

// Public Agency Pages
Route::view('/', 'welcome')->name('home');
Route::view('tentang', 'pages.tentang')->name('tentang');
Route::get('portofolio', [PortfolioController::class, 'index'])->name('portofolio');
Route::get('portofolio/{slug}', [PortfolioController::class, 'show'])->name('portofolio.detail');
Route::view('harga', 'pages.harga')->name('harga');
Route::view('faq', 'pages.faq')->name('faq');
Route::view('layanan', 'pages.layanan')->name('layanan');
Route::view('kontak', 'pages.kontak')->name('kontak');

// Protected Dashboard & Profile
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('logout', function (Logout $logout) {
    $logout();

    return redirect('/');
})->name('logout');

require __DIR__.'/auth.php';
