<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nguoidung;

class AdminLoginColltroller extends Controller
{
    //
    public function index(){
        return view('admin.pages.login');
    }
    public function dashboard(){//test
        return view('admin.pages.dashboard');
    }
    public function logout(Request $request){//test
        $request->session()->put('admin',null);
        return redirect("/admin/dangnhap");
    }
    public function login(Request $request){//test
        $taikhoan=$request->taikhoan;
        $matkhau= $request->matkhau;
        $remember=$request->remember;
        $nguoidung =Nguoidung::select('tennd','chucvu')
                    ->where('taikhoan', $taikhoan)
                    ->where('matkhau', $matkhau)
                    ->first();
    //if ($nguoidung->chucvu=='admin') { sai vi neu $nguoidung null thi se ko thuoc model nguoidung
    if ($nguoidung && $nguoidung->chucvu=='admin') {
        // Lưu trạng thái đăng nhập vào session
        //if($remember){ chua biet xu li
            $request->session()->put('admin', $nguoidung); // luu taikhoan
        //}
        return redirect("/admin/dashboard");
    }
        return back()->with('error', 'Sai tên đăng nhập hoặc mật khẩu!');
    }

}
