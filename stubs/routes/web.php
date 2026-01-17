<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/registration', [HomeController::class, 'registration'])->name('registration');
Route::post('/register_submit', [AuthController::class, 'register_submit'])->name('register_submit');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login_submit', [AuthController::class, 'login_submit'])->name('login_submit');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboards', [AuthController::class, 'dashboards'])->name('dashboards');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
    });

    Route::middleware(['role:manager'])->group(function () {
        Route::get('/manager/dashboard', [ManagerController::class, 'dashboard'])->name('manager_dashboard');
    });

    Route::middleware(['role:user'])->group(function () {
        Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user_dashboard');
    });

    Route::middleware(['role:admin,manager'])->group(function(){
        //
    });

});
