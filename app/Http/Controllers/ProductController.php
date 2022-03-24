<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    function index(){
        
        $products = Product::with('category')->orderBy('id', 'DESC')->get();

        //return $products ;die();
      //  $prodname =[];
        // foreach($products as $product)
        // {

        //    // $cate_json = json_decode($product->category);

        //    // return $cate_json;die();
           
            
        //     $prodname[]= $product->category->name;
        // }

        // return $prodname;
        
        


        
        
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

        $products->save();
        $request->session()->flash('success', 'Product created sucessfully');
        return  redirect('/products');

        }else{

            return  redirect('/products')->withErrors($validator)->withInput();
            
        }
        
    }

    public function edit($id, Request $request)
    {
        $products = Product::where('id', $id)->first();
        $categories = Category::orderBy('id', 'DESC')->get();
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
}
