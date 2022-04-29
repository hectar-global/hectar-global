<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function Home(Request $request)
    {
       
       // return "Test";
        //return view('admin.dashboard');
        //$categories = Category::orderBy('id', 'ASC')->get();
        //return view('admin.dashboard')->with(compact('categories'));
        return view('admin.dashboard');
    }
}

