<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Product;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function index($prod_id, Request $request)
    {
        
        $product = Product::with('category')->where('id', $prod_id)->first();

        $images = Gallery::where('product_id', $prod_id)->get();
        //return $images;die();
        return view('admin.gallery')->with(compact('product', 'images'));
    }

    public function upload($prod_id, Request $request)
    {
        if($request->hasFile('images')){
            foreach($request->images as $image)
            {
                
              //  $image_name = $image->getClientOriginalName();

             // $image = $image->name;
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/uploads/gallery');
               // $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);

                $file = new Gallery;
                $file->name = $name;
                $file->product_id = $prod_id;
                $file->save();
                
            }

            $request->session()->flash('success', 'Gallery images created sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
        }
    }

    function delete($id, Request $request){

        $images = Gallery::where('id', $id)->first();

        if(!$images){

            $request->session()->flash('success', 'Records not found');
            return redirect('products');
        }

        $img1= $images->name;
        $exist_img = base_path().'/public/uploads/gallery/'.$img1;
            if($img1 ){
                unlink($exist_img);
            }

       Gallery::where('id', $id)->delete();

        $request->session()->flash('success', 'Records has been deleted sucessfully');
           // return redirect('/gallery/'. request()->route()->prod_id);
            return redirect()->back();

    }
}
