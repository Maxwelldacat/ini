<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\OrderController;


Route::get('/', function () {
    return view('home');
});


// USER
Route::get('/videos', [VideoController::class, 'index']);

// ADMIN
Route::prefix('admin')->group(function () {
    Route::get('/videos', [VideoController::class, 'adminIndex']);
    Route::get('/videos/create', [VideoController::class, 'create']);
    Route::post('/videos', [VideoController::class, 'store']);
    Route::get('/videos/{id}/edit', [VideoController::class, 'edit']);
    Route::put('/videos/{id}', [VideoController::class, 'update']);
    Route::delete('/videos/{id}', [VideoController::class, 'destroy']);
    Route::get('/orders/{id}', [OrderController::class, 'show']);
    Route::put('/orders/{id}', [OrderController::class, 'update']);
    Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
});

// USER - FORM PEMESANAN
Route::get('/pemesanan', [OrderController::class, 'create']);
Route::post('/pemesanan', [OrderController::class, 'store']);

// ADMIN - KELOLA PEMESANAN
Route::get('/admin/orders', [OrderController::class, 'index']);
Route::get('/admin/orders/{id}/edit', [OrderController::class, 'edit']);
Route::put('/admin/orders/{id}', [OrderController::class, 'update']);
Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy']);

Route::get('/orders/{id}', [VideoController::class, 'showOrder']);

Route::get('/orders/{id}', [OrderController::class, 'show']);



