<?php

namespace App\Http\Controllers;

use App\Product;
use App\Packaging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PackagingController extends Controller
{
    public function index($prod_id, Request $request)
    {
        $product = Product::where('id', $prod_id)->first();
        $packagings = Packaging::with('product')->where('product_id', $prod_id)->orderBy('id', 'DESC')->get();
        $units = unit_arr();
        return view('admin.packaging')->with(compact('product', 'units', 'packagings'));
    }


    public function addPackaging($id, Request $request)
    {
        $freight = new Packaging;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'-'.$image->getClientOriginalName();
            $destinationPath = public_path('/uploads/posts');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $freight->image = $name;
          }



        $freight->name = $request->name;
        $freight->volume = $request->volume;
        $freight->unit = $request->unit;
        $freight->cost = $request->cost;
        $freight->description = $request->description;
        $freight->status = $request->status;
        $freight->product_id  = $id;
        

        $freight->save();
        $request->session()->flash('success', 'Freight price updated sucessfully');
        //return  redirect('/freight/'.$id);
        return redirect()->back();
    }

    public function editPackaging($id, Request $request)
    {
       // return "Testing";
       $units = unit_arr();
       $product = Product::where('id', request()->route()->prod_id)->first();
       $packaging = Packaging::where('id', request()->route()->id)->first();
       return view('admin.edit-packaging')->with(compact('packaging', 'units','product'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'name' => ['required', 'max:255'],
        ]);

        if($validator->passes()) {
            $packagings = Packaging::find($id);

            if ($request->hasFile('image1')) {
                $image = $request->file('image1');
                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/uploads/posts');
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $packagings->image = $name; 
                $exist_img1 = base_path().'/public/uploads/posts/'.$request->image;
               // unlink($exist_img1);
                if (File::exists($exist_img1)) {
                    File::delete($exist_img1);
                }

              }else{
                $packagings->image = $request->image;
              }
             

              $packagings->name = $request->name;
              $packagings->volume = $request->volume;
              $packagings->unit = $request->unit;
              $packagings->cost = $request->cost;
             // $products->published_date = $request->published_date;
              $packagings->description = $request->description;
              $packagings->status = $request->status;

              $packagings->save();

            $request->session()->flash('success', 'Packaging updated sucessfully');
            //return redirect('/products');
            return redirect()->back();
            
        }else{

            return redirect('/edit-packaging/'.request()->route()->prod_id.'/'.$id)->withErrors($validator)->withInput();

        }
    }

    function delete($id, Request $request){

        $packagings = Packaging::where('id', $id)->first();

        if(!$packagings){

            $request->session()->flash('success', 'Records not found');
            //return redirect('packaging/'.request()->route()->id);
            return redirect()->back();
        }

       // delete_img_db($id);
       Packaging::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
        //return redirect('/freight/'.$freights->prod_id);
        return redirect()->back();

    }


}
