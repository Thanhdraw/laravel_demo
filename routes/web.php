<?php

use App\Http\Controllers\demo;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Route::get('/demo', [demo::class, 'index']);
Route::get('/products', function () {
    return view('products');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Thêm route sửa đổi
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update'); // Thêm route cập nhật
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Thêm route xóa