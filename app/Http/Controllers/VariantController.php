<?php

namespace App\Http\Controllers;

use App\Product;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class VariantController extends Controller
{
    public function index($prod_id, Request $request)
    {
        $product = Product::where('id', $prod_id)->first();
        $variants = Variant::where('product_id', $prod_id)->get();
        return view('admin.variant')->with(compact('product', 'variants'));
    }

    public function addVariant($id, Request $request)
    {

        $variant = new Variant;
        
        if($request->hasFile('images')){
            foreach($request->images as $image)
            {
                
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/uploads/variants');
               // $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);

                $all_documents[]=$name;
               $get_all_documents = implode(',', $all_documents);
                
            }

        }

        $variant->images = $get_all_documents;
        $variant->name = $request->name;
        $variant->variant_description = $request->variant_description;
        $variant->status = $request->status;
        $variant->product_id  = $id;
        

        $variant->save();
        $request->session()->flash('success', 'variant created sucessfully');
        //return  redirect('/freight/'.$id);
        return redirect()->back();

    }

    public function editVariant($id, Request $request)
    {
       // return "Testing";
       $product = Product::where('id', request()->route()->prod_id)->first();
       $variant = Variant::where('id', request()->route()->id)->first();
       return view('admin.edit-variant')->with(compact('variant', 'product'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'name' => ['required', 'max:255'],
        ]);

        if($validator->passes()) {
            $variant = Variant::where('id', $id)->first();

            if ($request->hasFile('images1')) {


                foreach($request->images1 as $image)
            {
                
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/uploads/variants');
               // $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);

                $all_documents[]=$name;
               $get_all_documents = implode(',', $all_documents);
                
            }
                    // echo "<pre>";
                    // print_r($get_all_documents);die();

                $variant->images = $get_all_documents;

                $exist_images = implode(',', $request->images);

                $all_exist_images = explode(',', $exist_images);

                //return $all_exist_images;die();

                foreach($all_exist_images as $img1){

                    $exist_img = base_path().'/public/uploads/variants/'.$img1;
                    // if($img1 ){
                    //     unlink($exist_img);
                    // }

                    if (File::exists($exist_img)) {
                        File::delete($exist_img);
                    }
                    //continue;
                }


              }else{
                  //print_r($request->images);die();
                $get_all_documents1 = implode(', ', $request->images);
                
                $variant->images = $get_all_documents1;
              }
             

              $variant->name = $request->name;
              $variant->variant_description = $request->variant_description;
              $variant->status = $request->status;

              $variant->save();

            $request->session()->flash('success', 'Variant updated sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
            
        }else{

            return redirect('/edit-variant/'.request()->route()->prod_id.'/'.$id)->withErrors($validator)->withInput();

        }
    }


    function delete($id, Request $request){

        $variant = Variant::where('id', $id)->first();

        $images = $variant->images;    

        $all_exist_images = explode(',', $images);
        
        foreach($all_exist_images as $img1){

            $exist_img = base_path().'/public/uploads/variants/'.$img1;

            if (File::exists($exist_img)) {
                File::delete($exist_img);
            }
        }

        Variant::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
        //return redirect('/freight/'.$freights->prod_id);
        return redirect()->back();

    }

    public function variantById($id)
    {
        $variant = Variant::where('id', $id)->first();
    }


}
