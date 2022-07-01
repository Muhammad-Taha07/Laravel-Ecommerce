<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

    /* Admin Control */
Route::prefix('/admin')->namespace('Admin')->group(function(){
    });
    /* Category Routes */
Route::prefix('category')->group(function () {
    // Route::get('/view', 'CategoryController@fetchCategories')->name('View_category');
    Route::get('/view', [CategoryController::class,'fetchCategories'])->name('View_category');
    Route::get('/add','CategoryController@AddCategoryIndex')->name('add-category');
    Route::post('/submit', 'CategoryController@InsertCategory');
    Route::get('/categoryedit/{id}', 'CategoryController@editCategory')->name('edit-category');
    Route::post('edit-category/{category}','CategoryController@updateCategory');
    Route::get('/deletecategory/{category}','CategoryController@deleteCategory')->name('delete-category');
});
Route::prefix('product')->group(function() {
    Route::get('/viewProduct',[ProductController::class,'productIndex'])->name('view-product');
    Route::get('/add-product', [ProductController::class,'AddProductForm'])->name('Add-Product-form');
    Route::post('/create-product', [ProductController::class,'CreateProduct']);



});

