<?php

use App\Http\Controllers\Auth\NetworkController;
use App\Http\Controllers\Settings\CompanyController;
use App\Http\Controllers\Settings\OrganisationController;
use App\Http\Controllers\Settings\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('app.home');
})->name('home');

Auth::routes();

Route::get('/login/{network}', [NetworkController::class, 'redirect'])->name('login.network');
Route::get('/login/{network}/callback', [NetworkController::class, 'callback']);

Route::group([
    'prefix' => 'app',
    'middleware' => ['auth'],
], function () {
    Route::resource('settings/profile', ProfileController::class);

    Route::get('settings/roles', [OrganisationController::class, 'index'])->name('settings.roles');
    Route::patch('settings/roles/update/{id}', [OrganisationController::class, 'update'])->name('roles.update');

    /*Route::get('/settings/roles', function () {
        return view('app.pages.settings.roles_permissions');
    })->name('settings.roles');*/

    Route::resource('settings/company', CompanyController::class);
    /*Route::get('/settings/company', function () {
        return view('app.pages.settings.company');
    })->name('settings.company');*/

    Route::get('/settings/brand_product', function () {
        return view('app.pages.settings.brand_product');
    })->name('settings.brand_product');

    Route::get('/settings/campaign', function () {
        return view('app.pages.settings.campaign');
    })->name('settings.campaign');

    Route::get('/settings/language', function () {
        return view('app.pages.settings.lanquage');
    })->name('settings.lanquage');

    Route::get('/settings/payments', function () {
        return view('app.pages.settings.payments');
    })->name('settings.payments');
});
