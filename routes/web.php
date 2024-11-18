<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('customer/register', [App\Http\Controllers\CustomerController::class, 'register'])->name('customer.register');
//Route::post('customer/login', [App\Http\Controllers\CustomerLoginController::class, 'login'])->name('customer.login');
//Route::post('customer/forgotpassword', [App\Http\Controllers\CustomerController::class, 'forgotpassword'])->name('customer.forgotpassword');
//Route::post('customer/generatepassword', [App\Http\Controllers\CustomerController::class, 'generatepassword'])->name('customer.generatepassword');

Route::group(['middleware' => 'auth'], function () {
  Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
  });
});
