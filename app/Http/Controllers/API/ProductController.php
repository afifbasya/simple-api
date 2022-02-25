<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Helpers\ResponseFormatter;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();

        return ResponseFormatter::success(
            $data,
            'Product List Data successfully retrieved'
        );
    }
}
