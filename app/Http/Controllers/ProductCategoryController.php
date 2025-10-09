<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function adddanhmuc(Request $request){
        $danhmuc = new Danhmuc();
        $danhmuc->madm = $request->input('madm');
        $danhmuc->malsp = $request->input('malsp');
        $danhmuc->tendm = $request->input('tendm');

        DB::statement("INSERT INTO danhmucsanpham (madm,malsp,tendm) VALUES (?,?,?)",[$danhmuc->madm, $danhmuc->malsp, $danhmuc->tendm]);
        //return response()->json([$danhmuc->madm, $danhmuc->tendm]);
        //return redirect('/addproduct')->with('success', 'Sản phẩm mới đã được thêm thành công!');
    }
}

?>