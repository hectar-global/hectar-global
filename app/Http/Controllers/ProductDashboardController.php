<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductDashboardController extends Controller
{
    public function index(Request $request)
    {
        $prod_id = $request->prod_id;

        $product = Product::with('category')->where('id', $prod_id)->first();

       // return $product; die();
       
        return view('admin.product-dashboard')->with(compact('product'));
    }
}
