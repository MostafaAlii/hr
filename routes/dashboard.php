<?php
use App\Http\Controllers\Auth;
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
    Route::prefix('admin')->middleware('auth:admin')->group(function () {
        Route::get('dashboard', [Auth\AdminAuthController::class, 'admin_dashboard'])->name('admin.dashboard');
    });

    // Employee routes ::
    Route::prefix('employee')->middleware('auth:employee')->group(function () {
        Route::get('dashboard', [Auth\EmployeeAuthController::class, 'employee_dashboard'])->name('employee.dashboard');
    });

    require __DIR__.'/auth.php';
});