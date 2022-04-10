<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test Commment
*/

//1- call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//2-Do something in route
Route::get('/mesaj', function () {
    return 'Hello World';
});

//3-Call controller function
Route::get('/', [HomeController::class, 'index']);
//4- Route-Controller-View
Route::get('/show', [\App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/test', [\App\Http\Controllers\HomeController::class, 'test'])->name('test');

//5- Route with parameters
Route::get('/param/{id}/{number}', [\App\Http\Controllers\HomeController::class, 'param'])->name('param');

Route::get('/test3', [\App\Http\Controllers\HomeController::class, 'test3'])->name('test3');
Route::post('/save', [\App\Http\Controllers\HomeController::class, 'save'])->name('test3');

//************************ADMIN PANEL ROUTES**********************
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');

//************************ADMIN CATEGORY ROUTES**********************
Route::get('/admin/category', [AdminCategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin_category_create');

Route::post('/admin/category/store', [AdminCategoryController::class, 'store'])->name('admin_category_store');

Route::get('/admin/category/edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_update');
