<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    function product()
    {
        $product = Product::all();
        return $product;
    }
}
