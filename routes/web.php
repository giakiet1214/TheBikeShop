<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
//Khai bao controller
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\AddProductCategoryController;
use App\Http\Controllers\AdminLoginColltroller;

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
Route::post('/add-product', [AddProductController::class, 'addProduct'])->name('addproduct');

//gọi hàm thêm danh mục sản phẩm (09/10/2025) phuoc
Route::post('/add-product-category', [AddProductCategoryController::class, 'addProductCategory'])->name('addproductcategory');


// Route trang 404 khi url sai
Route::fallback( function () {return view('userViews/pages/404');});

//Route thang qua view
Route::get('/accessories', function () {return view('userViews/pages/accessories');});
Route::get('/bicycles', function () {return view('userViews/pages/bicycles');});
Route::get('/cart', function () {return view('userViews/pages/cart');});
Route::get('/parts', function () {return view('userViews/pages/parts');});
Route::get('/single', function () {return view('userViews/pages/single');});
Route::get('/contact', function () {return view('userViews/pages/contact');});
Route::get('/log-in', function () {return view('userViews/pages/log-in');});
Route::get('/sign-up', function () {return view('userViews/pages/sign-up');});


//không thể tới view thông qua các route trên xin hãy chỉnh sửa (xóa dòng này khi đã khắc phục)
//Route cho admin
Route::get('/admin/dangnhap',[AdminLoginColltroller::class,'index']);
Route::post('/admin/dangnhap',[AdminLoginColltroller::class,'login']);
Route::middleware('CheckAdLoginStatus')->group(function(){
    Route::get('/admin/dashboard',[AdminLoginColltroller::class, 'dashboard']);//test
    Route::get('/admin/dangxuat',[AdminLoginColltroller::class, 'logout']);
});
