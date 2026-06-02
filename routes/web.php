<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermController;
use App\Http\Controllers\BookmarkController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

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

require __DIR__.'/auth.php';

