<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    function addCategory(){
        return view('admin.addcategory');
    }

    function saveCategory(Request $request){
        //return "Hello"; die();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
        ]);

       

        if($validator->passes()) {
            $categories = new Category;

            $categories->name = $request->name;


            $categories->save();

            $request->session()->flash('success', 'Category created sucessfully');
            return redirect('/view-categories');
            
        }else{

            return redirect('/save-category')->withErrors($validator)->withInput();

        }
    }

    function saveSubCategory(Request $request){
        //return "Hello"; die();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'category_id' => ['required'],
        ]);

       

        if($validator->passes()) {
            $categories = new SubCategory;

            $categories->name = $request->name;
            $categories->category_id = $request->category_id;
            $categories->save();

            $request->session()->flash('success', 'Sub Category created sucessfully');
            return redirect('/add-subcategory');
            
        }else{

            echo "dfsdfsdfsdf";die();

            return redirect('/add-subcategory')->withErrors($validator)->withInput();

        }
    }


    function listCategory(){
        
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.listcategory')->with(compact('categories'));
    }

    function listVarianr(){
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.dashboard')->with(compact('categories'));
    }

    function addSubCategory(){
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.addsubcategory')->with(compact('categories'));
    }


    function updateHome(Request $request){

         if($request->ajax()){

           //$data = $request->all();
           

            // $category = new Category;

           //$home = $data['home_val'];
           //$id = $data['category_id'];
            $id = $request->category_id;
            // $catagories = Category::find($id);
            // $catagories->home = $request->home_val;
            // $catagories->save();

            Category::where('id',$id)->update(['home'=>$request->home_val]);

            return response()->json(['status'=>'Record updated successfully']);

        }
    }

    function updateStatus(Request $request){

        if($request->ajax()){

          $data = $request->all();
          

           // $category = new Category;

          //$home = $data['status'];
          $id = $data['category_id'];
           //$id = $request->category_id;
           $catagories = Category::find($id);
           $catagories->status = $request->status_val;
           $catagories->save();

           return response()->json(['status'=>'Record updated successfully']);

       }
   }

   function updateOrder(Request $request){

    if($request->ajax()){

      $data = $request->all();
      

       // $category = new Category;

      //$home = $data['status'];
      $id = $data['category_id'];
       //$id = $request->category_id;
       $catagories = Category::find($id);
       $catagories->display_order = $request->disp_order;
       $catagories->save();

       return response()->json(['status'=>'Record updated successfully']);

   }
}

   function editCategory($id, Request $request){

    //echo $id;

    $categories = Category::where('id', $id)->first();

    if(!$categories){
        $request->session()->flash('error', 'Records not found');
        return redirect('listcategory');
    }

    
    return view('admin.editcategory')->with(compact('categories'));

}


    function updateCategory($id, Request $request){

        //dd($request);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'home' => ['required', 'not_in:-- Select --'],
        ]);

        if($validator->passes()) {
            $categories = Category::find($id);

            $categories->name = $request->name;
            $categories->home = $request->home;
            $categories->save();

            $request->session()->flash('success', 'Product updated sucessfully');
            return redirect('/view-categories');
            
        }else{

            return redirect('/update-category'.$id)->withErrors($validator)->withInput();

        }
    }


    function deleteCategory($id, Request $request){

        $products = Category::where('id', $id)->first();

        if(!$products){

            $request->session()->flash('success', 'Records not found');
            return redirect('/view-categories');
        }

        Category::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
            return redirect('/view-categories');

    }

    function showNav(){
        
        //$products = DB::table('products')->orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('frontend.nav')->with(compact('categories'));
    }


}
