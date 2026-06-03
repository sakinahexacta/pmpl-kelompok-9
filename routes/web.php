<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/kamus', [TermController::class, 'index'])->name('kamus');

Route::get('/kamus/{id}', [TermController::class, 'show'])->name('term.show');

Route::get('/halamankamus', [TermController::class, 'show']);

Route::get('/dashboard', [TermController::class, 'show']);

Route::get('/history', [HistoryController::class, 'index'])->name('history');

Route::get('/history/{id}', [HistoryController::class, 'category'])->name('history.category');

Route::get('/bookmark', [BookmarkController::class, 'index'])
    ->name('bookmark');

Route::post('/bookmark', [BookmarkController::class, 'store'])->name('bookmark.store') ;

Route::get('/history', [HistoryController::class, 'index'])->name('history');

Route::get('/history/{id}', [HistoryController::class, 'category'])->name('history.category');

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/glosarium', [AdminController::class, 'glosarium'])->name('admin.glosarium');

    Route::get('/publish', [AdminController::class, 'publish'])->name('admin.publish');

    Route::get('/pending', [AdminController::class, 'pending'])->name('admin.pending');
});

Route::post('/admin/glosarium', [TermController::class, 'store'])
    ->name('term.store');

Route::get('/term/{id}/edit', [TermController::class, 'edit'])
    ->name('term.edit');

Route::delete('/term/{id}', [TermController::class, 'destroy'])
    ->name('term.destroy');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        Session::put('locale', $locale); // Simpan pilihan bahasa ke session
    }
    return redirect()->back(); // Balikin user ke halaman sebelumnya
})->name('switch.lang');

require __DIR__.'/auth.php';

