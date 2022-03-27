<?php

namespace App\Http\Controllers;

use App\Port;
use App\Type;
use App\Country;
use App\Product;
use App\Variant;
use App\Category;
use App\Freight;
use App\Packaging;
use Carbon\Carbon;
use App\ProductsDetails;
use App\Quality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        

       // echo $variant; die();
       
        return view('generate-quote')->with(compact('variant', 'type', 'quality', 'packaging', 'country', 'port', 'loada', 'quantity'));
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
}
