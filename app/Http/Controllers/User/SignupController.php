<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use App\Http\Controllers\Controller;
use App\Mail\SendOtp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class SignupController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


    public function userRegister(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            
            'name' => ['required', 'max:255'],
            //'category' => ['required', 'not_in:-- Select News Category --'],
        ]);
        
        if($validator->passes()) {  
           // return $request->input('name');

           $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->company = $request->company;
        $user->role_id = "2";
        $user->otp = random_int(100000, 999999);
        

        $user->save();
        Mail::to($user->email)->send(new SendOtp($user->otp));
        Auth::login($user);
        $request->session()->flash('success', 'Otp has been sent to your email please verify');
        return  redirect('/getotp');
        //return redirect()->back();
        }else{

            return  redirect('/')->withErrors($validator)->withInput();
            
        }
      
    }


    public function getOtp(Request $request)
    {
        //  $user_id = Auth::user()->id;

        //  echo $user_id;die();

        //$user_id = $uid;
        //return view('getotp')->with(compact('user_id'));
        return view('getotp');
    }

    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'otp' => ['required', 'max:255'],
        ]);

        $user_id = Auth::user()->id;


        if($validator->passes()) {
            //$freights = Freight::find($id);

             
              $otp = $request->otp;
              
             $verified= User::where("id", $user_id)->where('otp', $otp)->update(["status" => "1"]);

             if($verified)
             {
                return redirect('/')->withErrors($validator)->withInput();
             }else{
                return redirect('/getotp')->withErrors($validator)->withInput();
             }
              

            // $request->session()->flash('success', 'Product updated sucessfully');
            // return redirect('/freight/'.$request->prod_id);
            //return redirect()->route('profile', ['id' => 1]);
            
        }else{

            return redirect('/getotp')->withErrors($validator)->withInput();

        }
    }
}
