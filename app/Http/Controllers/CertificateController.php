<?php

namespace App\Http\Controllers;

use App\Product;
use App\Certificate;
use App\ProductsDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CertificateController extends Controller
{
    public function index($prod_id, Request $request)
    {
       // return "Certificates";
       $product = Product::where('id', $prod_id)->first();
       $products_details = ProductsDetails::where('product_id', $prod_id)->first();
       $certificates = Certificate::with('product')->where('product_id', $prod_id)->orderBy('id', 'DESC')->get();
       return view('admin.certificate')->with(compact('certificates', 'product', 'products_details'));
    }

    public function addCertificate($id, Request $request)
    {
        $certificate = new Certificate;

        // if ($request->hasFile('documents')) {
        //     $image = $request->file('image');
        //     $name = time().'-'.$image->getClientOriginalName();
        //     $destinationPath = public_path('/uploads/posts');
        //     $imagePath = $destinationPath. "/".  $name;
        //     $image->move($destinationPath, $name);
        //     $freight->image = $name;
        //   }

        if ($request->hasFile('documents')) {
           
            foreach($request->documents as $document)
            {
                $document_name = time().'-'.$document->getClientOriginalName();
                $image = $request->file('documents');
                //$document_size = $document->getClientSize();
                $document->storeAs('public/uploads/posts', $document_name);

                //$certificate->documents = $document_name;
                $all_documents[]=$document_name;
                $get_all_documents = implode(', ', $all_documents);
                
            }
            //echo "<pre>";
           // print_r($get_all_documents);
            $certificate->documents = $get_all_documents;
          }


        $certificate->title = $request->title;
        $certificate->short_description = $request->short_description;
        $certificate->status = $request->status;
        $certificate->product_id  = $id;
        

        $certificate->save();
        $request->session()->flash('success', 'Certificate created sucessfully');
        //return  redirect('/freight/'.$id);
        return redirect()->back();
    }


    public function editCertificate($id, Request $request)
    {
       // return "Testing";
       $product = Product::where('id', request()->route()->prod_id)->first();
       $certificate = Certificate::where('id', request()->route()->id)->first();
       return view('admin.edit-certificate')->with(compact('certificate', 'product'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'title' => ['required', 'max:255'],
        ]);

        if($validator->passes()) {
            $certificate = Certificate::find($id);

            if ($request->hasFile('documents1')) {


                foreach($request->documents1 as $document)
                {
                    $document_name = time().'-'.$document->getClientOriginalName();
                    $image = $request->file('documents1');
                    //$document_size = $document->getClientSize();
                    $document->storeAs('public/uploads/posts', $document_name);

                    //$certificate->documents = $document_name;
                    $all_documents[]=$document_name;
                    $get_all_documents = implode(', ', $all_documents);
                    
                }
                    // echo "<pre>";
                    // print_r($get_all_documents);die();

                $certificate->documents = $get_all_documents;

                // $exist_img_arr[] = $request->documents;

                // foreach( $exist_img_arr as $exist_img)
                // {
                //     $exist_img1 = storage_path('public/uploads/posts/' . $exist_img);
                //     if (File::exists($exist_img1)) {
                //         File::delete($exist_img1);
                //     }
                // }

              }else{
                 // print_r($request->documents);die();
                $get_all_documents1 = implode(', ', $request->documents);
                
                $certificate->documents = $get_all_documents1;
              }
             

              $certificate->title = $request->title;
              $certificate->short_description = $request->short_description;
              $certificate->status = $request->status;

              $certificate->save();

            $request->session()->flash('success', 'Certificate updated sucessfully');
            //return redirect('/certificate/'.request()->route()->prod_id);
            return redirect()->back();
            
        }else{

            return redirect('/edit-certificate/'.request()->route()->prod_id.'/'.$id)->withErrors($validator)->withInput();

        }
    }

    function delete($id, Request $request){

        $certificate = Certificate::where('id', $id)->first();

        if(!$certificate){

            $request->session()->flash('success', 'Records not found');
            //return redirect('packaging/'.request()->route()->id);
            return redirect()->back();
        }

       // delete_img_db($id);
       Certificate::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
        //return redirect('/freight/'.$freights->prod_id);
        return redirect()->back();

    }
}
