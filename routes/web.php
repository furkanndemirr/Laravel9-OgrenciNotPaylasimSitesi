<?php

use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\AdminContentController as AdminContentController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
//4- Route-Controller-View
Route::get('/show', [\App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/test', [\App\Http\Controllers\HomeController::class, 'test'])->name('test');

//5- Route with parameters
Route::get('/param/{id}/{number}', [\App\Http\Controllers\HomeController::class, 'param'])->name('param');

Route::get('/content/{id}', [\App\Http\Controllers\HomeController::class, 'content'])->name('content');
Route::get('/categorycontents/{id}/{slug}', [\App\Http\Controllers\HomeController::class, 'categorycontents'])->name('categorycontents');


Route::get('/test3', [\App\Http\Controllers\HomeController::class, 'test3'])->name('test3');
Route::post('/save', [\App\Http\Controllers\HomeController::class, 'save'])->name('test3');

//************************ADMIN PANEL ROUTES**********************
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    //************************ADMIN CATEGORY ROUTES**********************

    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function()
    {
    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/destroy/{id}', 'destroy')->name('destroy');
    Route::get('/show/{id}','show')->name('show');
    });
        //************************ADMIN Content ROUTES**********************
    Route::prefix('/content')->name('content.')->controller(AdminContentController::class)->group (function()
    {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    //************************ADMIN Content Image Gallery ROUTES**********************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group (function()
    {
        Route::get('/{cid}','index')->name('index');
        Route::post('/store/{cid}','store')->name('store');
        Route::get('/destroy/{cid}/{id}', 'destroy')->name('destroy');

    });

});
