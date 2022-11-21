<?php
use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register dashboard routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "dashboard" middleware group. Now create something great!
|
*/

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){
    Route::prefix('admin')->middleware('auth:admin')->as('admin.')->group(function () {
        Route::get('dashboard', [Auth\AdminAuthController::class, 'admin_dashboard'])->name('dashboard');
        Route::get('main_settings', [Dashboard\SettingController::class, 'main_settings'])->name('main_settings');
    });

    // Employee routes ::
    Route::prefix('employee')->middleware('auth:employee')->as('employee.')->group(function () {
        Route::get('dashboard', [Auth\EmployeeAuthController::class, 'employee_dashboard'])->name('dashboard');
    });

    require __DIR__.'/auth.php';
});
