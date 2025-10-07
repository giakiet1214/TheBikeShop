<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    // Hiển thị trang chủ với 3 sản phẩm
    function index(){
        $products = Product::take(3)->get(); // Lấy 3 sản phẩm đầu tiên
        //return response()->json($products);
        return view('pages/home', compact('products'));
    }
    

}
?>