<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class AddProductCategoryController extends Controller
{
    public function addProductCategory(Request $request){
        $danhmuc = new ProductCategory();
        $danhmuc->madm = $request->input('madm');
        $danhmuc->malsp = $request->input('malsp');
        $danhmuc->tendm = $request->input('tendm');

        DB::statement("INSERT INTO danhmucsanpham ( madm, malsp, tendm ) VALUES (?,?,?)",[$danhmuc->madm, $danhmuc->malsp, $danhmuc->tendm]);
        //return response()->json([$danhmuc->madm, $danhmuc->tendm]);
        //return redirect('/addproduct')->with('success', 'Sản phẩm mới đã được thêm thành công!');
    }
}

?>