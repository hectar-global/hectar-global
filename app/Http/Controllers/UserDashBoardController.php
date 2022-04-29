<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashBoardController extends Controller
{
    public function index()
    {
        return view('mydashboard');
    }
}
