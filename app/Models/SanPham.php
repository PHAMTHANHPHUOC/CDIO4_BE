<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class SanPham extends Model
{
    use HasFactory;
    protected $table = "san_phams";
    protected $fillable = [
        'ten_san_pham',
        'ghi_chu',
        'so_luong',
        'hinh_anh',
        'tinh_trang',
        'size',
        'gia_up_size',
        'gia_ban',
        'gia_khuyen_mai',
        'id_danh_muc',
    ];
}
