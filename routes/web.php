<?php

use App\Http\Controllers\PhotosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PhotosController::class, 'home'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [PhotosController::class, 'index'])->name('dashboard');
        Route::post('store', [PhotosController::class, 'store'])->name('dashboard-store');
        Route::post('update', [PhotosController::class, 'update'])->name('dashboard-update');
        Route::delete('delete/{id}', [PhotosController::class, 'delete'])->name('dashboard-delete');
    });
});
