<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProductManageController;
use Illuminate\Support\Facades\DB;

Route::get('/home', [HomeAdminController::class, 'index']);
Route::get('/dashboard', [DashboardController::class,'dashboard']);
Route::get('/productmanage', [ProductManageController::class,'productmanage']);
Route::get('/login', function () {
    return view('admin.pages.login');
});
Route::post('/login', [LoginAdminController::class, 'store'])->name('login.store');
