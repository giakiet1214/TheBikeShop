<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    class ProductCategory extends Model
    {
        protected $table = 'danhmucsanpham'; // Tên bảng trong cơ sở dữ liệu
        protected $fillable = ['madm','tendm','malsp'];
    }

?>