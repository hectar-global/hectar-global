<?php

namespace App\Http\Controllers;

use App\Price;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    
    public function index($prod_id, Request $request)
    {
        //return "Price Index";
        $products = Product::with('variant', 'quality.price')->where('id', $prod_id)->get();

       // return $products;die();

        //$prices = Price::where('product_id', $prod_id)->get();
        
       return view('admin.price')->with(compact('products'));
    }

    public function update($id, Request $request)
    {
        $product_id = $id;
        $variant_id = request()->route()->vid;

        //echo $variant_id;die();

       // return $request->all(); die();

       // $price = new Price;

       $requestData = $request->except('_token');
       

       //return $requestData; die();
       $price = Price::where('variant_id', $variant_id)->first();
      // return $price;die();
       if (empty($price)) {

        foreach ($requestData as $key => $value) {

            $qid = str_replace('price_', '', $key);

            $price = new Price;

            $price->price = $value;
            $price->product_id  = $product_id;
            $price->variant_id  = $variant_id;
            $price->quality_id  = $qid ;
                
            $price->save();

        }
    }else{

       // echo "Testing";die();

       $get_prices = Price::where("variant_id", $variant_id)->get();

      // $counter = count($get_prices);
      // echo $counter; die();

       foreach( $get_prices as $get_price){    

            foreach ($requestData as $key => $value) {

                $qid = str_replace('price_', '', $key);


                DB::table('prices')
                    ->where('variant_id', $variant_id)
                    ->where('quality_id', $qid)
                    ->update(['price' => $value]);


                //     $price = Price::where('id', $get_price->id)->first();

                //    // $price = Price::firstOrNew(["id" => $get_price->id]);

                //  //return $price;die();
                        
                //     $price->update([
                //         "price" => $value
                //         // "product_id" => $product_id,
                //         // "variant_id" => $variant_id,
                //         // "quality_id" => $qid
                //     ]);
                }


        }

    }

        $request->session()->flash('success', 'Price updated sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
    }
}
