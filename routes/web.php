<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Control
// Route::prefix('/admin')->namespace('Admin')->group(function(){
// //All the admin routes will be define here
//     Route::get('dashboard','Admin/AdminController@dashboard');

//Category Section
Route::get('category','CategoryController@index')->name('category');



// });
