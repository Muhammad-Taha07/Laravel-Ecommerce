<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfigController;
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

/* CUSTOMER - SECTION */
    Route::get('/', [UserHomeController::class, 'index'])->name('user.home');
/* CUSTOMER - SECTION */

    Auth::routes(['register' => true]);
    Route::middleware(['auth'])->group(function () {

/* ADMIN CONTROL-PANEL ROUTES */
    Route::prefix('/admin')->namespace('Admin')->group(function(){
        Route::get('/home', [HomeController::class, 'index'])->name('home');

/* BRAND - ROUTES */

/* CATEGORY - ROUTES */
Route::prefix('category')->group(function () {
    // Route::get('/view', 'CategoryController@fetchCategories')->name('View_category');
    Route::get('/view', [CategoryController::class,'fetchCategories'])->name('View_category');
    Route::get('/add', [CategoryController::class, 'addCategoryView'])->name('add-category');
    Route::post('/submit', [CategoryController::class, 'InsertCategory'])->name('create-category');
    Route::get('/categoryedit/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('edit-category/{category}', [CategoryController::class, 'updateCategory']);
    Route::get('/deletecategory/{category}', [CategoryController::class, 'deleteCategory'])->name('delete-category');
});

/* PRODUCT - ROUTES */
Route::prefix('product')->group(function() {
    Route::get('/viewProduct',[ProductController::class,'productIndex'])->name('view-product');
    Route::get('/add-product', [ProductController::class,'AddProductForm'])->name('Add-Product-form');
    Route::post('/create-product', [ProductController::class,'CreateProduct'])->name('create-product');
    Route::get('/productedit/{product}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::put('/edit-product/{product}', [ProductController::class, 'updateProduct']);
    Route::get('/deleteproduct/{product}', [ProductController::class, 'deleteProduct'])->name('delete-product');
});
    });

// /* Category Routes */
//     Route::prefix('category')->group(function () {
//         // Route::get('/view', 'CategoryController@fetchCategories')->name('View_category');
//         Route::get('/view', [CategoryController::class,'fetchCategories'])->name('View_category');
//         Route::get('/add', [CategoryController::class, 'AddCategoryIndex'])->name('add-category');
//         Route::post('/submit', [CategoryController::class, 'InsertCategory']);
//         Route::get('/categoryedit/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
//         Route::post('edit-category/{category}', [CategoryController::class, 'updateCategory']);
//         Route::get('/deletecategory/{category}', [CategoryController::class, 'deleteCategory'])->name('delete-category');
//     });

// /* Product Routes */
//     Route::prefix('product')->group(function() {
//         Route::get('/viewProduct',[ProductController::class,'productIndex'])->name('view-product');
//         Route::get('/add-product', [ProductController::class,'AddProductForm'])->name('Add-Product-form');
//         Route::post('/create-product', [ProductController::class,'CreateProduct'])->name('create-product');
//         Route::get('/productedit/{product}', [ProductController::class, 'editProduct'])->name('edit-product');
//         Route::put('/edit-product/{product}', [ProductController::class, 'updateProduct']);
//         Route::get('/deleteproduct/{product}', [ProductController::class, 'deleteProduct'])->name('delete-product');
//     });

});
