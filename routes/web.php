<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;

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
Route::get('/home', [HomeController::class, 'index']);

//gọi hàm thêm sản phẩm mới từ controller (09/10/2025) phuoc
Route::post('/addproduct', [ProductController::class, 'addproduct'])->name('addproduct');

//gọi hàm thêm danh mục sản phẩm (09/10/2025) phuoc
Route::post('/adddanhmuc', [ProductCategoryController::class, 'adddanhmuc'])->name('adddanhmuc');


// Route trang 404 khi url sai
Route::fallback( function () {return view('pages/404');});

//Route thang qua view
Route::get('/accessories', function () {return view('pages/accessories');});
Route::get('/bicycles', function () {return view('pages/bicycles');});
Route::get('/cart', function () {return view('pages/cart');});
Route::get('/parts', function () {return view('pages/parts');});
Route::get('/single', function () {return view('pages/single');});
Route::get('/contact', function () {return view('pages/contact');});
