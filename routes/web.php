<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Route;

// Public Agency Pages
Route::view('/', 'welcome')->name('home');
Route::view('tentang', 'pages.tentang')->name('tentang');
Route::view('portofolio', 'pages.portofolio')->name('portofolio');
Route::view('harga', 'pages.harga')->name('harga');
Route::view('alur-kerja', 'pages.alur-kerja')->name('alur-kerja');
Route::view('faq', 'pages.faq')->name('faq');
Route::view('layanan', 'pages.layanan')->name('layanan');

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
