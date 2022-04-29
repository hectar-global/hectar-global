<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function index(){
        //$catemobile = Category::where('home', 1)->orderBy('display_order', 'ASC')->limit(4)->get();
       // return view('layout.frontend.index')->with(compact('posts_lead', 'posts_top'));
       $products = Product::with('freight', 'countries')->get();
       //return $products;die();

       foreach($products as $product){
           $countries= $product->countries;
       }

    //    foreach($countries as $country)
    //    {
    //        $country_name = $country->name;
    //    }

    //   return $country_name;die();
       return view('index')->with(compact('products', 'countries'));
    }
}
