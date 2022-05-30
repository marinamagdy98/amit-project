<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\ResetPasswordController;
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
Route::resource('Admin', AdminController::class)->middleware(['auth','isadmin']);
Route::resource('categories', CategoryController::class);

//cart routes

Route::delete('remove-from-cart', [CartController::class,'remove']);
Route::get('cart', [CartController::class,'cart']);
Route::get('add-to-cart/{id}', [CartController::class,'addToCart']);


//profile & search route

Route::get('/profile',[ProfileController::class,'showProfile']);
Route::get('/search',[ProductsController::class, 'search']);

//auth routes
Auth::routes(['verify'=>true]);

Route::post('/changePasswordPost',[App\Http\Controllers\Auth\ResetPasswordController::class])->name('changePasswordPost');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');

