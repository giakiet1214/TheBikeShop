<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductManageController extends Controller
{
    //
    function productmanage(Request $request){
        return view("admin.pages.productmanage");
    }
}
