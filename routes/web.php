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
    return view('app.home');
});

Route::get('/settings/profile', function () {
    return view('app.pages.settings.profile');
})->name('user.profile');

Route::get('/settings/roles', function () {
    return view('app.pages.settings.roles_permissions');
})->name('user.roles');

Route::get('/settings/company', function () {
    return view('app.pages.settings.company');
})->name('user.company');

Route::get('/settings/brand_product', function () {
    return view('app.pages.settings.brand_product');
})->name('user.brand_product');
