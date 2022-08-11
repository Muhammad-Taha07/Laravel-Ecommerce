<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\HomeController;
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
Auth::routes();
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/testpage', [HomeController::class, 'testpage']);

    /* Admin Control */
Route::prefix('/admin')->namespace('Admin')->group(function(){
    });
    /* Category Routes */
Route::prefix('category')->group(function () {
    // Route::get('/view', 'CategoryController@fetchCategories')->name('View_category');
    Route::get('/view', [CategoryController::class,'fetchCategories'])->name('View_category');
    Route::get('/add', [CategoryController::class, 'AddCategoryIndex'])->name('add-category');
    Route::post('/submit', [CategoryController::class, 'InsertCategory']);
    Route::get('/categoryedit/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('edit-category/{category}', [CategoryController::class, 'updateCategory']);
    Route::get('/deletecategory/{category}', [CategoryController::class, 'deleteCategory'])->name('delete-category');
});
Route::prefix('product')->group(function() {
    Route::get('/viewProduct',[ProductController::class,'productIndex'])->name('view-product');
    Route::get('/add-product', [ProductController::class,'AddProductForm'])->name('Add-Product-form');
    Route::post('/create-product', [ProductController::class,'CreateProduct'])->name('create-product');
    Route::get('/productedit/{product}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::put('/edit-product/{product}', [ProductController::class, 'updateProduct']);
    Route::get('/deleteproduct/{product}', [ProductController::class, 'deleteProduct'])->name('delete-product');
});

    Route::get('/viewHome', [UserHomeController::class, 'index']);
