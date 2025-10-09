<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\Danhmuc;

class AddProductController extends Controller
{
    public function index() {
        $products = Product::all(); // lấy tất cả sản phẩm trong bảng sanpham
        //return view('customer.product', compact('products'));
    }
// hàm thêm sản phẩm mới (09/10/2025)phuoc
    function addProduct(Request $request) {    
        $extension = $request->file('anh')->getClientOriginalExtension(); // lấy phần mở rộng của file   
        $fileName = Str::slug($request->input('masp'), '-', ($request->input('madm')) ). '.' . $extension;//phần slug dùng để tạo 1 tên ảnh theo masp và danh muc
        $request->file('anh')->move(public_path('images'), $fileName);// move() or store: dùng để lưu ảnh vào thư mục ở đây move sẽ lưu ảnh vào thư mục public/images với tên như filename đã tạo phái trên
        $product = new Product();
        $product->anh = $fileName;
        $product->masp = $request->input('masp');
        $product->tensp = $request->input('tensp');
        $product->madm = $request->input('madm');
        $product->mansx = $request->input('mansx');
        $product->soluong = $request->input('soluong');
        $product->size = $request->input('size');
        $product->giaban = $request->input('giaban');
        $product->mota = $request->input('mota');
        $product->trangthai = $request->input('trangthai');
        $product->tags = $request->input('tags');
        
        $check = DB::select("SELECT * FROM danhmucsanpham WHERE madm = ?", [$product->madm]);

        if(count($check) > 0){ 
            DB:: statement("INSERT INTO sanpham ( anh, masp, tensp, madm, mansx, soluong, size, giaban, mota, trangthai, tags) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$product->anh, $product->masp, $product->tensp, $product->madm, $product->mansx, $product->soluong, $product->size, $product->giaban, $product->mota, $product->trangthai, $product->tags]);
            //return redirect('/')->with('success', 'Sản phẩm mới đã được thêm thành công!');
        }
        //return response()->json("can them");    
        //return view('customer.adddanhmuc');    
    }
}
