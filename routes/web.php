<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

Route::get('/qr', [QrController::class, 'qr']);
Route::post('/qr', [QrController::class, 'qr']);
Route::get('/', [QrController::class, 'qr']);