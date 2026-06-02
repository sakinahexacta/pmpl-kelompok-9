<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\HistoryController;

Route::post('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/search', [TermController::class, 'search']);

Route::get('/bookmarks', [BookmarkController::class, 'index']);
Route::post('/bookmarks', [BookmarkController::class, 'store']);

Route::get('/histories', [HistoryController::class, 'index']);
Route::post('/history', [HistoryController::class, 'store']);

Route::get('/terms', [TermController::class, 'index']);
Route::get('/terms/{id}', [TermController::class, 'showApi']);
Route::post('/terms', [TermController::class, 'store']);
Route::put('/terms/{id}', [TermController::class, 'update']);
Route::delete('/terms/{id}', [TermController::class, 'destroy']);
Route::get('/terms', [TermController::class, 'getAll']);

// Route::get('/test', function () {
//     return response()->json([
//         'message' => 'API jalan'
//     ]);
// });

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/bookmark', [BookmarkController::class, 'store']);
// });

