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