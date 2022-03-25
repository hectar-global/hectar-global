<?php

namespace App\Http\Controllers;

use App\Product;
use App\Quality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QualityController extends Controller
{
    public function index($prod_id, Request $request)
    {
        $product = Product::where('id', $prod_id)->first();
        $qualities = Quality::where('product_id', $prod_id)->get();
        return view('admin.quality')->with(compact('qualities', 'product'));
    }

    public function addQuality($id, Request $request)
    {

        $variant = new Quality;

        $variant->title = $request->title;
        $variant->quality_description = $request->quality_description;
        $variant->status = $request->status;
        $variant->product_id  = $id;
        

        $variant->save();
        $request->session()->flash('success', 'Quality created sucessfully');
        //return  redirect('/freight/'.$id);
        return redirect()->back();
    }

    public function edit($id, Request $request)
    {
       // return "Testing";
       $product = Product::where('id', request()->route()->prod_id)->first();
       $quality = Quality::where('id', request()->route()->id)->first();
       return view('admin.edit-quality')->with(compact('quality', 'product'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'title' => ['required', 'max:255'],
        ]);

        if($validator->passes()) {
            $type = Quality::where('id', $id)->first();
             
              $type->title = $request->title;
              $type->quality_description = $request->quality_description;
              $type->status = $request->status;
              $type->save();

            $request->session()->flash('success', 'Quality updated sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
            
        }else{

            return redirect('/edit-quality/'.request()->route()->prod_id.'/'.$id)->withErrors($validator)->withInput();

        }
    }

    function delete($id, Request $request){

        Quality::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
        //return redirect('/freight/'.$freights->prod_id);
        return redirect()->back();

    }
}
