<?php

namespace App\Http\Controllers;

use App\Port;
use App\Country;
use App\Freight;
use App\Product;
use App\Category;

use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;
use Illuminate\Support\Facades\Validator;

class FreightController extends Controller
{
    public function index($prod_id, Request $request)
    {
        // $products = Product::where('id', $id)->first();
        // $categories = Category::orderBy('id', 'DESC')->get();
        // return view('admin.freight')->with(compact('products', 'categories'));
        //$prod_id = $request->prod_id;
        $freights = Freight::with('product', 'countries', 'ports')->where('product_id', $prod_id)->orderBy('id', 'DESC')->get();

        $product = Product::where('id', $prod_id)->first();
        //$countries = country_arr();
        $ports = port_arr();
        $containers = container_arr();

        $countries = Country::all();

        //return $countries ;die();

        return view('admin.freight')->with(compact('freights','countries', 'containers', 'product'));
    }

    public function addFreight($id, Request $request)
    {
        $freight = new Freight;

        $freight->country = $request->country;
        $freight->port = $request->port;
        $freight->container = $request->container;
        $freight->volume = $request->volume;
        $freight->cost = $request->cost;
        $freight->notes = $request->notes;
        $freight->product_id  = $id;
        

        $freight->save();
        $request->session()->flash('success', 'Freight price updated sucessfully');
        return  redirect('/freight/'.$id);
    }

    public function updatePrice($id, Request $request)
    {
       
        $request = $request->except(['_token']);

        foreach($request as $key => $val)
        {

            Freight::where("id", $key)->update(["cost" => $val]);
            
        }
        session()->flash('success', 'Freight created sucessfully');
        return  redirect('/freight/'.$id);
    }

    public function editFreight($id, Request $request)
    {
       // return "Testing";
    //    $countries = country_arr();

        $country = Country::all();
        $port = Port::all();
        $containers = container_arr();
        $product = Product::where('id', request()->route()->prod_id)->first();
        $freight = Freight::with('countries', 'ports')->where('id', request()->route()->id)->first();
       return view('admin.edit-freight')->with(compact('freight', 'country', 'port', 'containers', 'product'));
      
    }


    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'country' => ['required', 'max:255'],
        ]);

        if($validator->passes()) {
            //$freights = Freight::find($id);

             
              $country = $request->country;
              $port = $request->port;
              $container = $request->container;
              $volume = $request->volume;
             // $products->published_date = $request->published_date;
              $cost = $request->cost;
              $notes = $request->notes;

              //$freights->save();
              $product = Product::where('id', $request->prod_id)->first();
              Freight::where("id", $id)->update(["country" => $country]);

            $request->session()->flash('success', 'Product updated sucessfully');
            return redirect('/freight/'.$request->prod_id);
            //return redirect()->route('profile', ['id' => 1]);
            
        }else{

            return redirect('/edit-freight/'.$id)->withErrors($validator)->withInput();

        }
    }

    function delete($id, Request $request){

        $freights = Freight::where('id', $id)->first();

        if(!$freights){

            $request->session()->flash('success', 'Records not found');
            return redirect('freight/'.request()->route()->id);
        }

       // delete_img_db($id);
        Freight::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
        //return redirect('/freight/'.$freights->prod_id);
        return redirect()->back();

    }


}
