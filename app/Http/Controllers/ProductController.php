<?php

namespace App\Http\Controllers;

use App\Port;
use App\Country;
use App\Product;
use App\Category;
use Carbon\Carbon;
use App\ProductsDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    function index(){
        
        $products = Product::with('category')->orderBy('id', 'DESC')->get();

        //return $products ;die();
        
        
       return view('admin.productlist')->with(compact('products'));
    }

    public function addProduct(Request $request)
    {
        

    $validator = Validator::make($request->all(), [
            
        'name' => ['required', 'max:255'],
        //'category' => ['required', 'not_in:-- Select News Category --'],
    ]);


        if($validator->passes()) {

            $products = new Product;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/uploads/posts');
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $products->image = $name;
              }

        $products->name = $request->name;
        $products->price = $request->price;

        

        DB::transaction(function () use ($products) {
            $products->save();
            $productsdetails = new ProductsDetails;
            $productsdetails->product_id = $products->id;
            $productsdetails->save();
            //$products->productsdetails()->save($productsdetails);
            });


        //$products->save();
        $request->session()->flash('success', 'Product created sucessfully');
        return  redirect('/products');

        }else{

            return  redirect('/products')->withErrors($validator)->withInput();
            
        }
        
    }

    public function edit($prod_id, Request $request)
    {
        $products = Product::where('id', $prod_id)->first();
        $categories = Category::orderBy('id', 'DESC')->get();

       // $createdDateTime= $products->created_at->format('M d Y');
       // $updatedDateTime= $products->updated_at->format('M d Y');
        //echo $createdDateTime;die();
        return view('admin.editproduct')->with(compact('products', 'categories'));

    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'name' => ['required', 'max:255'],
        ]);

        if($validator->passes()) {
            $products = Product::find($id);

            if ($request->hasFile('image1')) {
                $image = $request->file('image1');
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/uploads/posts');
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $products->image = $name; 
                $exist_img1 = base_path().'/public/uploads/posts/'.$request->image;
               // unlink($exist_img1);
                if (File::exists($exist_img1)) {
                    File::delete($exist_img1);
                }

              }else{
                $products->image = $request->image;
              }


              $mul_cate= $request->category;

              if($mul_cate){
                $cate= implode(',', $mul_cate);
              }else{
                $cate = null;
              }
             

              $products->name = $request->name;
              $products->category_id = $cate;
              $products->price = $request->price;
              $products->country = $request->country;
             // $products->published_date = $request->published_date;
              $products->status = $request->status;

              $products->save();

            $request->session()->flash('success', 'Product updated sucessfully');
            return redirect('/products');
            
        }else{

            return redirect('/edit-product/'.$id)->withErrors($validator)->withInput();

        }
    }


    public function updateStatus(Request $request)
    {
        // $product_id = $request->product_id;
        // $status = $request->status_val;
        // $product = new product();
        // $product->exists = true;
        // $product->id = $product_id; //already exists in database.
        // $product->status = $status;
        // $product->save();

        $product = Product::find($request->product_id);
        $product->status = $request->status_val;
        $result = $product->update();
        if($result)
        {
            //$request->session()->flash('success', 'Product status updated sucessfully');
            return array("status" => "Product status updated sucessfully");
        }
        
    }

    function delete($id, Request $request){

        $products = Product::where('id', $id)->first();

        if(!$products){

            $request->session()->flash('success', 'Records not found');
            return redirect('products');
        }

        delete_img_db($id);
        Product::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
            return redirect('/products');

    }

    public function listProducts()
    {
        $products = Product::with('category', 'packaging', 'certificate', 'gallery')->paginate(6);

      // return $products;die();
        if($products)
        {
            foreach($products as $product)
            {
               // $packs[] = $product->packaging;

               foreach($product->packaging as $results)
               {
                   $all_units[]= $results->unit;
               }
               
            }

        }

       // return $all_units;die();
        return view('products-list')->with(compact('products'));
    }

    public function productById($prod_id, Request $request)
    {
        
        
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



        return view('product-details')->with(compact('product', 'delivryDateTime', 'variant_image_count', 'all_types', 'variant_images', 'all_qalities', 'quality_count', 'type_count', 'countries', 'ports'));
    }
}
