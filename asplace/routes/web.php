<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\SellingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


/* Добавляем фнукионал для пользователя с ролями  */
Route::middleware(['auth:sanctum', 'verified'])->resource('users', UserController::class);

Route::resource('admin/students', StudentsController::class);
Route::resource('admin/supplier', SupplierController::class);
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/product', ProductController::class);
Route::resource('admin/selling', SellingController::class);