<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('product', compact('products'));
    }

    public function show($productCode)
    {
        $products = Product::where('productCode', $productCode)->get();
        if($products -> isEmpty()) {
            $products = Product::where('productLine', $productCode)->paginate(10);
            return view('product', compact('products'));
        } else {
            return view('details', compact('products'));
        }
    }
}
