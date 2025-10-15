<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    //
    function index(Request $request){
        return view("admin.home.index");
    }
}
