<?php

use App\Product;

if(!function_exists('app_name')) {

function app_name()
{
    return config('app.name');
}
}


// function manage_image_upload($image)
// {

// }

function delete_img_db($id)
{
    
    $posts = Product::where('id', $id)->first();

    $img1= $posts->image;
    $exist_img = base_path().'/public/uploads/posts/'.$img1;
        if($img1 ){
            unlink($exist_img);
        }
    
}

function country_arr(){

    $country_data = array("India"=>"India", "Sri Lanka"=>"Sri Lanka", "UK"=>"UK", "US"=>"US");

    return $country_data;
}

function port_arr(){

    $port_data = array("Port-1"=>"Port-1", "Port-2"=>"Port-2", "Port-3"=>"Port-3", "Port-4"=>"Port-4");

    return $port_data;
}

function container_arr(){

    $container_data = array("20ft"=>"20ft", "40ft"=>"40ft");

    return $container_data;
}

function unit_arr(){

    $unit_data = array("KG"=>"KG", "MT"=>"MT", "LITRE"=>"LITRE");

    return $unit_data;
}