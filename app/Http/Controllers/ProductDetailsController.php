<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductsDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsController extends Controller
{
    
    // Edit product description
    public function productDescription($prod_id, Request $request)
    {
        //return "Product Description";
        $product = Product::with('category')->where('id', $prod_id)->first();
        
        $products_details = ProductsDetails::where('product_id', $prod_id)->first();

        $countries = country_arr();
        $categories = Category::all();
        return view('admin.product-description')->with(compact('product', 'countries', 'categories', 'products_details'));
    }


    // update product description
    public function updateProductDescription($prod_id, Request $request)
    {
        
       DB::transaction(function () use ($request, $prod_id) {

            Product::where('id',$prod_id)->update([
                'country'=>$request->country,
                'category_id'=>$request->category
            ]);

            ProductsDetails::where('product_id',$prod_id)->update([
                    'product_description'=>$request->product_description
            ]);
       
        });
        
            $request->session()->flash('success', 'Product description updated sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
            
    }


    // Edit farming production
    public function farmingProduction($prod_id, Request $request)
    {
       // return "Farmin Production"; die();
        $product = Product::where('id', $prod_id)->first();
        
        $products_details = ProductsDetails::where('product_id', $prod_id)->first();

        return view('admin.farming-production')->with(compact('product', 'products_details'));
    }


    // update product description
    public function updateFarmingProduction($prod_id, Request $request)
    {
        

            ProductsDetails::where('product_id',$prod_id)->update([
                    'farming_details'=>$request->farming_details
            ]);
        
            $request->session()->flash('success', 'Farming production updated sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
            
    }
    
    
    // product certification description
    public function updateCertificationDescription($prod_id, Request $request)
    {
        

            ProductsDetails::where('product_id',$prod_id)->update([
                'certificate_description'=>$request->certificate_description,
                'product_description'=>$request->product_description,
                'farming_details'=>$request->farming_details
            ]);

            $request->session()->flash('success', 'Product certification updated sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
            
    }
    
}
