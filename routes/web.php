<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('client.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/role',[ RoleController::class, 'index' ])->name('role.index');
    Route::post('/role/store',[ RoleController::class, 'store' ])->name('role.store');
    Route::delete('/role/delete/{id}',[ RoleController::class, 'destroy' ])->name('role.delete');
    Route::resource('user', UserController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('voucher', VoucherController::class);
});

