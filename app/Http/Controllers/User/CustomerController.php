<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    
    public function index(Request $request)
    {
        $customers = User::where('role_id', '2')->get();

        return view('admin.customers')->with(compact('customers'));
    }

    public function customerById($id, Request $request)
    {
        $customer = User::where('id', $id)->where('role_id', '2')->first();

        //return $customer;die();

        return view('admin.customer-details')->with(compact('customer'));
    }

    public function edit($id, Request $request)
    {

        // $customer = User::where('id', request()->route()->id)->first();
        $customer = User::where('id', $id)->first();
       return view('admin.edit-customer')->with(compact('customer'));
      
    }


    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'name' => ['required', 'max:255'],
        ]);

        if($validator->passes()) {
            //$freights = Freight::find($id);

             
              $name = $request->name;
              $company = $request->company;
              $email = $request->email;
              $mobile = $request->mobile;

              //$freights->save();
             // $product = Product::where('id', $request->prod_id)->first();
              User::where("id", $id)->update([
                  "name" => $name,
                  "company" => $company,
                  "email" => $email,
                  "mobile" => $mobile,
                ]);

            $request->session()->flash('success', 'Cutomer updated sucessfully');
            return redirect('/customers');
            //return redirect()->route('profile', ['id' => 1]);
            
        }else{

            return redirect('/customer-edit/'.$id)->withErrors($validator)->withInput();

        }
    }

    public function customerLogin()
    {
        return view('customer-login');
    }


}
