<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
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

// kiem tra ket noi db
Route::get('/check-db', function () {
    try {
        DB::connection()->getPdo();
        return "✅ Kết nối CSDL thành công!";
    } catch (\Exception $e) {
        return "❌ Lỗi: " . $e->getMessage();
    }
});
// Route thang qua controller
Route::get('/', [HomeController::class, 'index']);

//Route thang qua view
//Route::get('/', function () {return view('pages/home');});
Route::get('/home', function () {return view('pages/home');});
Route::get('/bicycles', function () {return view('pages/bicycles');});
// Route::get('/', function () {return view('pages/home');});
// Route::get('/', function () {return view('pages/home');});
// Route::get('/', function () {return view('pages/home');});
