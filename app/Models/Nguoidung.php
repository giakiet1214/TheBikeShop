<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nguoidung extends Model
{
        protected $table = 'nguoidung'; // Tên bảng trong cơ sở dữ liệu
        protected $fillable = ['tennd','taikhoan', 'matkhau','chucvu'];
}
