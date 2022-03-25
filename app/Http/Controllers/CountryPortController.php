<?php

namespace App\Http\Controllers;

use App\Port;
use Illuminate\Http\Request;

class CountryPortController extends Controller
{
    //

    public function getPort(Request $request)
    {
        
        $id= $request->input('id');
        $get_port = Port::where('country_id', $id)->get();
        $cap = array('get_port' => $get_port);
        $output = '<option>Select Port</option>';
        foreach($get_port as $key)
        {
            $output = '<option value="'.$key->id.'">'.$key->name.'</option>';
        }
        echo json_encode($output);
    }
}
