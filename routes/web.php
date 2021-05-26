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
=
Route::get('/about-us',[
    App\Http\Controllers\HomeController::class,
    'aboutus'

]);
Route::get('/contact',[
    App\Http\Controllers\HomeController::class,
    'contact'

]);
Route::get('/services',[
    App\Http\Controllers\HomeController::class,
    'services'

]);
Route::get('/gallery',[
    App\Http\Controllers\HomeController::class,
    'gallery'

]);
Route::get('/profile/anthony',[
    App\Http\Controllers\HomeController::class,
    'profile'

]);
Route::get('/profile/albert',[
    App\Http\Controllers\HomeController::class,
    'profile1'

]);
Route::get('/services/cleaning',[
    App\Http\Controllers\HomeController::class,
    'servicesCleaning'

]);
Route::get('/auth/user/forgot/password',[
    App\Http\Controllers\HomeController::class,
    'authUserForgotPassword'

]);





Route::get('/search/product',[
    App\Http\Controllers\HomeController::class,
    'searchProduct'

]);
Route::get('/products/filter/all/free',[
    App\Http\Controllers\HomeController::class,
    'productsFilterAllFree'

]);
Route::get('/members',[
    App\Http\Controllers\HomeController::class,
    'members'

]);
Route::get('/print',[
    App\Http\Controllers\HomeController::class,
    'print'

]);
Route::get('/order/checkout',[
    App\Http\Controllers\HomeController::class,
    'orderCheckout'

]);
Route::get('/facebook/accounts/members/login',[
    App\Http\Controllers\HomeController::class,
    'facebookAccountsMembersLogin'

]);






