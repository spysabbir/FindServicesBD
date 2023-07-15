<?php

use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Admin\CategoryController;
use App\Http\Controllers\Backend\Admin\SubcategoryController;
use App\Http\Controllers\Backend\Admin\ChargeController;
use App\Http\Controllers\Backend\Employee\EmployeeController;
use App\Http\Controllers\Backend\User\ServiceController;
use App\Http\Controllers\Backend\User\UserController;
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
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:Admin', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');

    Route::resource('category', CategoryController::class);
    Route::get('category-trash', [CategoryController::class, 'trash'])->name('category.trash');
    Route::get('category-restore/{id}', [CategoryController::class, 'restore'])->name('category.restore');
    Route::get('category-forcedelete/{id}', [CategoryController::class, 'forceDelete'])->name('category.force.delete');
    Route::get('category-status/{id}', [CategoryController::class, 'status'])->name('category.status');

    Route::resource('subcategory', SubcategoryController::class);
    Route::get('subcategory-trash', [SubcategoryController::class, 'trash'])->name('subcategory.trash');
    Route::get('subcategory-restore/{id}', [SubcategoryController::class, 'restore'])->name('subcategory.restore');
    Route::get('subcategory-forcedelete/{id}', [SubcategoryController::class, 'forceDelete'])->name('subcategory.force.delete');
    Route::get('subcategory-status/{id}', [SubcategoryController::class, 'status'])->name('subcategory.status');

    Route::resource('charge', ChargeController::class);
});

// Employee Route--------------------------------------------------------------------------
Route::prefix('employee')->name('employee.')->middleware(['auth', 'role:Employee', 'verified'])->group(function () {
    Route::get('/dashboard', [EmployeeController::class, 'employeeDashboard'])->name('dashboard');
    Route::get('/profile', [EmployeeController::class, 'employeeProfile'])->name('profile');

    Route::resource('service', ServiceController::class);
});

// User Route--------------------------------------------------------------------------
Route::prefix('user')->name('user.')->middleware(['auth', 'role:User', 'verified'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'userDashboard'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'userProfile'])->name('profile');

    Route::resource('service', ServiceController::class);
});
