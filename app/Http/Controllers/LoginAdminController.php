<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    //
    function login(Request $request){
        return view("admin.pages.login");
    }
    public function store(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $request->validate([
            'email' => 'required|email',
        ]);

        // Nếu hợp lệ
        return back()->with('success', 'Email hợp lệ: ' . $request->email);
    }
}
