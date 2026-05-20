<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TermController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/search', [TermController::class, 'search']);