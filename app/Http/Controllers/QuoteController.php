<?php

namespace App\Http\Controllers;

use App\Port;
use App\Type;
use App\Order;
use App\Price;
use App\Country;
use App\Freight;
use App\Product;
use App\Quality;
use App\Variant;
use App\Category;
use App\ordernew;
use App\Packaging;
use Carbon\Carbon;
use App\ProductsDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    public function generateQuote($prod_id, Request $request)
    {
       
        $variant_id= $request->variant;
        $variant_name = Variant::find($variant_id);
        $variant= $variant_name->name;

        $type_id= $request->type;
        $type_name = Type::find($type_id);
        $type= $type_name->title;


        $quality_id= $request->quality;
        $quality_name = Quality::find($quality_id);
        $quality= $quality_name->title;

        $packaging_id= $request->packaging;
        $packaging_name = Packaging::find($packaging_id);
        $packaging= $packaging_name->name;

        $country_id= $request->country;
        $country_name = Country::find($country_id);
        $country= $country_name->name;

        $port_id= $request->port;
        $port_name = Port::find($port_id);
        $port= $port_name->name;

        $quantity= $request->quantity;
       // $quantity_name = Freight::find($freight_id);
      //  $quantity= $port_name->name;

        $freight_id= $request->loada;
        $container_name = Freight::find($freight_id);
        $loada= $container_name->container;

        $getPrice = Price::where('quality_id', $quality_id)->where('variant_id', $variant_id )->first();
        $mandi_price = $getPrice->price;
        $final_price = $mandi_price/75;

        $freight = Freight::where('country', $country_id)->where('port', $port_id)->where('container', $loada)->first();
        $freight_price= $freight->cost;
        $freight_cost = $freight_price * $quantity;

        
        $volume = $freight->volume; 
        $total_volume = $volume * $quantity;

        $packaging_volume = $packaging_name->volume;

        $total_packages = ($total_volume * 1000)/$packaging_volume;

        $packaging_cost = $packaging_name->cost * $total_packages;

        $cif_cost = ($mandi_price * $total_volume) + $packaging_cost + ($freight_cost);
        

        //echo $cif_cost; die();

        $order = new Order;
        $order->product_id = $prod_id;
        $order->user_id = Auth::user()->id;
        $order->variant = $variant;
        $order->type = $type;
        $order->quality = $quality;
        $order->country = $country;
        $order->port = $port;
        $order->packaging = $packaging;
        $order->loadability = $loada;
        $order->quantity = $quantity;
        $order->price = $cif_cost;
        $order->save();
       
        return view('generate-quote')->with(compact('variant', 'type', 'quality', 'packaging', 'country', 'port', 'loada', 'quantity', 'cif_cost'));
    }

    public function calculateQuote($prod_id, Request $request)
    {
        //return "Generate Quoteeeeee";
        //return back();

        

        $product = Product::with('category', 'packaging', 'certificate', 'gallery', 'details', 'freight', 'variant', 'type', 'quality')->where('id', $prod_id)->first();

        //return $product->freight;die();

       $countries = Country::all();

       $ports = Port::all();


       // Quality
       $qualities_arr=[];
       if($product->quality){
        foreach($product->quality as $result)
        {
            $qualities_arr[] = $result->title;
        }
       }

       if(!empty( $qualities_arr )){
        $quality_count = count($qualities_arr);
        $qualities_arr= implode(", ", $qualities_arr);
        
        $all_qalities = $qualities_arr;
    }else{
        $all_qalities = "";
        $quality_count="";
    }

    //return $qualities_arr;die();

        // types
       if($product){
            foreach($product->type as $result)
            {
                $types_arr[] = $result->title;
            }
        }

            if(!empty( $types_arr )){
                $type_count = count($types_arr);
                $types_arr= implode(",", $types_arr);
                $all_types = $types_arr;
            }else{
                $all_types = "";
                $type_count="";
            }
            
        // Variant
 
            if(!empty($product->variant['0']))
            {
                
                $images = $product->variant['0']->images;
                $images = explode(",",$images);
                // print_r($images);die();
                $variant_image_count= count($images);

                $arrNewVariantImg = array();
                $incI = 0;
                foreach($images as $key => $val){
                    $arrNewVariantImg[$incI]['src'] = asset('uploads/variants/').'/'.$val;
                    $incI++;
                }

                $variant_images = json_encode($arrNewVariantImg);

                //return $variant_images;die();

            }else{

                $variant_images="";

                $variant_image_count="0";
            }

            // Variant end

        $currentDateTime  = Carbon::now();
        $newDateTime = Carbon::now()->addDays(7);
        $delivryDateTime= $newDateTime->format('M d Y');

        $variant= $request->variant;
        $type= $request->type;
        $quality= $request->quality;
        $packaging= $request->packaging;

        return view('calculate-quote')->with(compact('product', 'delivryDateTime', 'variant_image_count', 'all_types', 'variant_images', 'all_qalities', 'quality_count', 'type_count', 'countries', 'ports', 'variant', 'type', 'quality', 'packaging'));
       // return redirect('/generate-quote/'.$prod_id, ['variant' => $variant]);

        //return $packaging;

        //dd($request);
    }

    public function getQuote(Request $request)
    {
        return $request;

        // $freight_id = $request->loadability;

        // $freight = Freight::find($freight_id);
        // $country_id= $freight->country;

        // $prod_id = $request->prod_name;
       // echo $freight_id; die();
    }

    public function completeQuote(Request $request)
    {
       // return $request;

    //    if ($request->isMethod('get')) 
    //         {
    //             return $request;

    //         }
            

        $freight_id = $request->loadability;
      //  echo $freight_id;die();

        $get_freight= Freight::with('countries', 'ports')->where('id', $freight_id)->first();

        $get_loadability = $get_freight->container;

       // return $get_loadability; die();

        $get_country = $get_freight->countries->name;
        $get_port = $get_freight->ports->name;

        //return $get_port;die();
        
        $country_id= $request->country;

        $prod_id = $request->prod_name;

        $variants = Variant::where('product_id', $prod_id)->get();

        $types = Type::where('product_id', $prod_id)->get();

        $packagings = Packaging::where('product_id', $prod_id)->get();

      //  return $types;die();
        foreach($variants as $variant)
        {
            $variant_id= $variant->id;
        }
       // $variant_id= $request->variant;

       // echo $variant_id;die();

        $container = $get_loadability;
        foreach($packagings as $packaging)
        {
            $packaging_id = $packaging->id;
        }

        $port_id = $get_freight->ports->id;
        $product_id = $prod_id;
        

        $medium_mandi = Price::where('variant_id', $variant_id)->where('quality_id', 3)->first();
        $medium_mandi_price = $medium_mandi->price;

        $delux_mandi = Price::where('variant_id', $variant_id)->where('quality_id', 4)->first();
        $delux_mandi_price = $delux_mandi->price;

        $best_mandi = Price::where('variant_id', $variant_id)->where('quality_id', 5)->first();
        $best_mandi_price = $best_mandi->price;




        $medium_CIF_cost = $this->getQuoteCal($variant_id, $country_id, $port_id, $packaging_id, $container, 3);

        $deluxe_CIF_cost = $this->getQuoteCal($variant_id, $country_id, $port_id, $packaging_id, $container, 4);

        $best_CIF_cost = $this->getQuoteCal($variant_id, $country_id, $port_id, $packaging_id, $container, 5);
        
        return view('completequote')->with(compact('medium_mandi_price', 'delux_mandi_price', 
        'best_mandi_price', 'prod_id', 'get_freight', 
        'variants', 'types', 'packagings', 'freight_id', 
        'medium_CIF_cost', 'deluxe_CIF_cost', 'best_CIF_cost', 
        'variant_id', 'country_id', 'port_id', 'container', 'packaging_id', 'product_id'));
    }

    public function completeQuoteTwo(Request $request)
    {
         //return $request; die(); 
        
       // return "Testing";

        $variant_id= $request->variant;

        $country_id = $request->country;
        $port_id = $request->port;
        $container = $request->cantainer; //loadability
        $packaging_id = $request->packaging;
        $product_id = $request->prod_id;
        //$type_id = $request->type_id;

      

        $medium_CIF_cost = $this->getQuoteCal($variant_id, $country_id, $port_id, $packaging_id, $container, 3);

        $deluxe_CIF_cost = $this->getQuoteCal($variant_id, $country_id, $port_id, $packaging_id, $container, 4);

        $best_CIF_cost = $this->getQuoteCal($variant_id, $country_id, $port_id, $packaging_id, $container, 5);

       // return $medium_CIF_cost; die();


        $variants = Variant::where('product_id', $request->prod_id)->get();
        $packagings = Packaging::where('product_id', $request->prod_id)->get();
        $freight_id = $request->freight_id;

        $get_freight= Freight::with('countries', 'ports')->where('id', $freight_id)->first();

        //return $get_freight;die();

        $medium_mandi = Price::where('variant_id', $variant_id)->where('quality_id', 3)->first();
        $medium_mandi_price = $medium_mandi->price;

        $delux_mandi = Price::where('variant_id', $variant_id)->where('quality_id', 4)->first();
        $delux_mandi_price = $delux_mandi->price;

        $best_mandi = Price::where('variant_id', $variant_id)->where('quality_id', 5)->first();
        $best_mandi_price = $best_mandi->price;

       // echo $best_mandi_price;die();

        $pages_array =[
            [
                "medium" => $medium_CIF_cost,
            ],
            [
                "deluxe" => $deluxe_CIF_cost,
            ],
            [
                "best" => $best_CIF_cost,
            ]
        
        ];


        // return view('completequote-two')->with(compact('best_mandi_price', 
        // 'delux_mandi_price', 'medium_mandi_price', 'best_CIF_cost', 
        // 'deluxe_CIF_cost', 'medium_CIF_cost', 'variants', 
        // 'packagings', 'get_freight', 'variant_id', 'country_id', 'container', 'packaging_id', 'product_id', 'port_id'));

        
        return [
            "best_mandi_price"=> $best_mandi_price, 
            "delux_mandi_price"=> $delux_mandi_price, 
            "medium_mandi_price"=> $medium_mandi_price, 
            "best_CIF_cost"=> $best_CIF_cost, 
            "deluxe_CIF_cost"=> $deluxe_CIF_cost, 
            "medium_CIF_cost"=> $medium_CIF_cost, 
            "variants"=> $variants, 
            "packagings"=> $packagings, 
            "get_freight"=> $get_freight, 
            "variant_id"=> $variant_id, 
            "country_id"=> $country_id, 
            "container"=> $container, 
            "packaging_id"=> $packaging_id, 
            "product_id"=> $product_id, 
            "port_id"=> $port_id
        ];
    }

    public function orderPlace(Request $request)
    {
       // return $request;die();
       // $uid = Auth::id();

      // echo $uid;die();
        $variant_id = $request->variant_id;
        $country_id = $request->country_id;
        $port_id = $request->port_id;
        $lodability = $request->lodability;
        $packaging_id = $request->packaging_id;
        $product_id = $request->product_id;
        $quality = $request->quality;

        $CIF_cost = $request->CIF_cost;

        $order = new ordernew();
        $order->product_id = $product_id;
        $order->user_id = Auth::user()->id;
        $order->variant = $variant_id;
       // $order->type = $type;
        $order->quality = $quality;
        $order->country = $country_id;
        $order->port = $port_id;
        $order->packaging = $packaging_id;
        $order->loadability = $lodability;
        $order->quantity = "1";
        $order->status = "1"; // Awaiting confirmation
        $order->price = $CIF_cost;
        $order->save();

        return redirect('/mydashboard');

    }

    

    private function getQuoteCal($variant_id, $country_id, $port_id, $packaging_id, $container, $quality_id)
    {
        $medium_mandi = Price::where('variant_id', $variant_id)->where('quality_id', $quality_id)->first();
        $medium_mandi_price = $medium_mandi->price;
        $medium_final_price = $medium_mandi_price / 75;

        $medium_freight = Freight::where('country', $country_id)->where('port', $port_id)->where('container', $container)->first();
        $medium_freight_cost = $medium_freight->cost * 1; // 1 is quantity

        $medium_total_volume = $medium_freight->volume * 1 ; //1 is quantity

        $medium_packaging = Packaging::where('id', $packaging_id)->first();
        $medium_packaging_volume = $medium_packaging->volume;
        
        $medium_total_packages = ($medium_total_volume * 1000)/ $medium_packaging_volume;

        $medium_packaging_cost = $medium_packaging->cost * $medium_total_packages;

        $medium_CIF_cost = ($medium_mandi_price * $medium_total_volume) + $medium_packaging_cost + ($medium_freight_cost);

        return $medium_CIF_cost;
    }

    public function quoteList()
    {

        $orders = ordernew::with('user', 'product')->where('status',  "1")->get();

        $order_count = count($orders);

        $orders_count = $order_count? $order_count:"";

       // return $orders;die();
        return view('admin.quote-list')->with(compact('orders', 'orders_count'));
    }

    public function updateStatus(Request $request)
    {

        $product = ordernew::find($request->order_id);
        $product->status = $request->status_val;
        $result = $product->update();
        if($result)
        {
            //$request->session()->flash('success', 'Product status updated sucessfully');
            return array("status" => "Product status updated sucessfully");
        }
        
    }
}
