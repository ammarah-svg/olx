<?php
use App\Http\Controllers\OlxController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\categoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/', 'pages.users.welcome');
Route::view('/dashboard', 'pages.admin.Dashboard');
Route::view('/admin/dashboard/categories', 'pages.admin.add-categories')->name('add-categories');
Route::view('/admin/dashboard/products', 'pages.admin.add-products')->name('add-products');


Route::post('/add-category', [CategoryController::class, 'addCategory']);