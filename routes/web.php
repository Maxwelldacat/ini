

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PortofolioController;


Route::get('/', function () {
    return view('home');
});



// USER
Route::get('/portofolio', [VideoController::class, 'index']);

// ADMIN
/*Route::prefix('admin')->group(function () {
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
*/

// USER - FORM PEMESANAN
Route::get('/pemesanan', [OrderController::class, 'create']);
Route::post('/pemesanan', [OrderController::class, 'store']);

// ADMIN - KELOLA PEMESANAN
Route::get('/admin/orders', [OrderController::class, 'index']);
Route::get('/admin/orders/{id}/edit', [OrderController::class, 'edit']);
Route::put('/admin/orders/{id}', [OrderController::class, 'update']);
Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy']);

Route::get('/orders/{id}/video', [VideoController::class, 'showOrder']);

Route::get('/orders/{id}', [OrderController::class, 'show']);



Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::post('/admin/login', [AdminController::class, 'login']);

Route::get('/admin', [AdminController::class, 'index']);

Route::post('/admin/logout', [AdminController::class, 'logout']);

Route::get('/orders/sukses/{id}', [OrderController::class, 'sukses']);


Route::get('/orders/{id}/upload', [OrderController::class, 'uploadForm']);
Route::post('/orders/{id}/upload', [OrderController::class, 'uploadBukti']);


// DETAIL JASA
Route::get('/services/event', function () {
    return view('services.event');
});

Route::get('/services/wisata', function () {
    return view('services.wisata');
});

/*
Route::get('/admin/photos', [PhotoController::class, 'index']);
Route::post('/admin/photos', [PhotoController::class, 'store']);
*/



Route::get('/admin/portofolio', [PortofolioController::class, 'index']);
Route::post('/admin/portofolio/video/{position}', [PortofolioController::class, 'updateVideo']);
Route::post('/admin/portofolio/photo/{position}', [PortofolioController::class, 'updatePhoto']);

Route::put('/admin/portofolio/video/{id}', [PortofolioController::class, 'updateVideo']);

Route::put('/admin/portofolio/photo/{id}', [PortofolioController::class, 'updatePhoto']);

Route::post('/upload-bukti/{id}', [OrderController::class, 'uploadBukti'])
    ->name('upload.bukti');