<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function getData()
    {
        $dulieu  = SanPham::select('san_phams.*')->get();
        return response()->json([
            'data'  =>  $dulieu
        ]);
    }
}
