<?php

namespace App\Http\Controllers;

use App\Order;
use App\ordernew;
use App\Orderstatus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList()
    {

        $orders = ordernew::with('user', 'product')->where('status', '>', '1')->get();

        $order_count = count($orders);

        $orders_count = $order_count? $order_count:"";

       // return $orders;die();
        return view('admin.order-list')->with(compact('orders', 'orders_count'));
    }

    public function edit($id, Request $request)
    {
        $order = ordernew::where('id', $id)->first();
        return view('admin.edit-order')->with(compact('order'));

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

        $product = ordernew::find($request->order_id);
        $product->status = $request->status_val;
        $result = $product->update();
        if($result)
        {
            //$request->session()->flash('success', 'Product status updated sucessfully');
            return array("status" => "Product status updated sucessfully");
        }
        
    }

    public function orderDetails($id, Request $request)
    {
        $order = ordernew::with('user', 'product', 'ordersstatus')->where('id', $id)->orderBy('status', 'DESC')->first();


       // return $order->ordersstatus;die();

    //    foreach($order->ordersstatus as $orderstatus)
    //    {
    //        $images = explode(",", $orderstatus->image); 
    //        foreach($images as $out) {
    //         echo $out."<br>";
    //      }
    //    }      


        
        return view('admin.order-details')->with(compact('order'));
    }

    public function updateDetailsStatus($id, Request $request)
    {
       // return $id;

       if ($request->hasFile('documents')) {
           
            foreach($request->documents as $image)
            {
                


                $name = time().'-'.$image->getClientOriginalName();
                $destinationPath = public_path('/uploads/posts');
               // $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);

                //$certificate->documents = $document_name;
                $all_documents[]=$name;
                $get_all_documents = implode(', ', $all_documents);
                
            }

            // $ordernew_status = ordernew::find(request()->route()->id);
            // $ordernew_status->status = $request->order_status;
            // $ordernew_status->message = $request->msg;
            // $ordernew_status->images = $get_all_documents;
            // $ordernew_status->update();

            $order_status = new Orderstatus();
            $order_status->status = $request->order_status;
            $order_status->message = $request->msg;
            $order_status->order_id = request()->route()->id;
            $order_status->image = $get_all_documents;
            $order_status->product_id = $request->product_id;

            DB::transaction(function () use ($order_status, $request, $get_all_documents) {
                $order_status->save();
                $ordernew_status = ordernew::find(request()->route()->id);
                $ordernew_status->status = $request->order_status;
                $ordernew_status->message = $request->msg;
                $ordernew_status->images = $get_all_documents;
                $ordernew_status->update();
                });
   
      }else{
        // $ordernew_status = ordernew::find(request()->route()->id);
        // $ordernew_status->status = $request->order_status;
        // $ordernew_status->message = $request->msg;
        // $ordernew_status->update();

            $order_status = new Orderstatus();
            $order_status->status = $request->order_status;
            $order_status->message = $request->msg;
            $order_status->order_id = request()->route()->id;
            $order_status->product_id = $request->product_id;

            DB::transaction(function () use ($order_status, $request) {
                $order_status->save();
                $ordernew_status = ordernew::find(request()->route()->id);
                $ordernew_status->status = $request->order_status;
                $ordernew_status->message = $request->msg;
                $ordernew_status->update();
                });
      }

        

    $request->session()->flash('success', 'Order status updated sucessfully');
        // return redirect('/certificate/'.request()->route()->prod_id);
       // return redirect()->back();
       return redirect('/orders');

    }
}
