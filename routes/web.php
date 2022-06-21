<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.home');
});

Route::get('/settings/profile', function () {
    return view('app.pages.settings.profile');
})->name('settings.profile');

Route::get('/settings/roles', function () {
    return view('app.pages.settings.roles_permissions');
})->name('settings.roles');

Route::get('/settings/company', function () {
    return view('app.pages.settings.company');
})->name('settings.company');

Route::get('/settings/brand_product', function () {
    return view('app.pages.settings.brand_product');
})->name('settings.brand_product');

Route::get('/settings/campaign', function () {
    return view('app.pages.settings.campaign');
})->name('settings.campaign');

Route::get('/settings/language', function () {
    return view('app.pages.settings.lanquage');
})->name('settings.lanquage');
