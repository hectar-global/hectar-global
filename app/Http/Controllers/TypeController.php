<?php

namespace App\Http\Controllers;

use App\Type;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function index($prod_id, Request $request)
    {
        $product = Product::where('id', $prod_id)->first();
        $types = Type::where('product_id', $prod_id)->get();
        return view('admin.type')->with(compact('types','product'));
    }

    public function addType($id, Request $request)
    {

        $variant = new Type;

        $variant->title = $request->title;
        $variant->type_description = $request->type_description;
        $variant->status = $request->status;
        $variant->product_id  = $id;
        

        $variant->save();
        $request->session()->flash('success', 'Type created sucessfully');
        //return  redirect('/freight/'.$id);
        return redirect()->back();

    }

    public function edit($id, Request $request)
    {
       // return "Testing";
       $product = Product::where('id', request()->route()->prod_id)->first();
       $type = Type::where('id', request()->route()->id)->first();
       return view('admin.edit-type')->with(compact('type', 'product'));
    }


    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'title' => ['required', 'max:255'],
        ]);

        if($validator->passes()) {
            $type = Type::where('id', $id)->first();
             
              $type->title = $request->title;
              $type->type_description = $request->type_description;
              $type->status = $request->status;
              $type->save();

            $request->session()->flash('success', 'Type updated sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
            
        }else{

            return redirect('/edit-type/'.request()->route()->prod_id.'/'.$id)->withErrors($validator)->withInput();

        }
    }


    function delete($id, Request $request){

        Type::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
        //return redirect('/freight/'.$freights->prod_id);
        return redirect()->back();

    }



}
