<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChargeController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Admin Route--------------------------------------------------------------------------
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');

    Route::resource('category', CategoryController::class);

    Route::resource('subcategory', SubcategoryController::class);

    Route::resource('charge', ChargeController::class);

});

// Employee Route--------------------------------------------------------------------------
Route::prefix('employee')->name('employee.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'employeeDashboard'])->name('dashboard');
    Route::get('/profile', [EmployeeController::class, 'profile'])->name('profile');

    Route::resource('service', ServiceController::class);

});

// User Route--------------------------------------------------------------------------
Route::prefix('user')->name('user.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'userDashboard'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::resource('service', ServiceController::class);

});
