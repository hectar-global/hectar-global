<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    function addPost(){
        $categories = Category::orderBy('id', 'DESC')->get();
        
        return view('admin.addpost')->with(compact('categories'));
    }

    function saveNews(Request $request){

        $validator = Validator::make($request->all(), [
            
            //'title' => ['required', 'max:255'],
            'category' => ['required', 'not_in:-- Select News Category --'],
            // 'source' => ['required'],
            //'story' => ['required'],
            'status' => ['required', 'not_in:-- Select --'],
        ]);

        if($validator->passes()) {

        $post = new Post;

        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $name = $_FILES['image1']['name'].time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/posts');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $post->image = $name;
          }

        $mul_cate= $request->category;

         $cate= implode(',', $mul_cate);

         //echo $cate;die();

        $post->title = $request->title;
        $post->category = $cate;
        $post->author = $request->author;
        $post->source = $request->source;
        $post->story = strip_tags($request->story);
        $post->video_link = $request->video_link;
        $post->published_date = $request->published_date;
        $post->top_news = $request->top_news;
        $post->home = $request->home;
        $post->status = $request->status;
        $post->meta_title = $request->meta_title;
        $post->meta_keywords = $request->meta_keywords;
        $post->meta_description = strip_tags($request->meta_description);
        //print_r($request->input());
        $post->save();
        $request->session()->flash('success', 'News updated sucessfully');
            return redirect('/view-news');
    }else{

        return redirect('/add-news')->withErrors($validator)->withInput();

    }

    }

    function postList(){

        $categories = Category::orderBy('id', 'DESC')->get();
        //$posts = Post::orderBy('id', 'DESC')->get();
        $posts = Post::orderBy('id', 'DESC')->paginate(20); // using paginate for pagination
        return view('admin.postlist')->with(compact('categories', 'posts'));
    }

    function editPost($id, Request $request){

        //echo $id;

        $posts = Post::where('id', $id)->first();

        if(!$posts){
            $request->session()->flash('error', 'Records not found');
            return redirect('/view-news');
        }

        //$categories = DB::table('categories')->orderBy('id', 'DESC')->get();
        //$manufacture = Manufactures::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.editpost')->with(compact('posts', 'categories'));

    }


    function updatePost($id, Request $request){

        //print_r($request);die();

        $validator = Validator::make($request->all(), [
            
            'title' => ['required', 'max:255'],
            'category' => ['required', 'not_in:-- Select News Category --'],
            // 'author' => ['required'],
            //'story' => ['required'],
             'status' => ['required', 'not_in:-- Select --'],
        ]);

        if($validator->passes()) {
            $posts = Post::find($id);

            if ($request->hasFile('image1')) {
                $image = $request->file('image1');
                $name = $image->getClientOriginalName().time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/posts');
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $posts->image = $name; 
                $exist_img1 = base_path().'/public/uploads/posts/'.$request->image;
               // unlink($exist_img1);
                if (File::exists($exist_img1)) {
                    File::delete($exist_img1);
                }

              }else{
                $posts->image = $request->image;
              }


              $mul_cate= $request->category;

              $cate= implode(',', $mul_cate);

              $posts->title = $request->title;
              $posts->category = $cate;
              $posts->author = $request->author;
              $posts->source = $request->source;
              $posts->story = $request->story;
              $posts->video_link = $request->video_link;
              $posts->published_date = $request->published_date;
              $posts->top_news = $request->top_news;
              $posts->home = $request->home;
              $posts->status = $request->status;
              $posts->meta_title = $request->meta_title;
              $posts->meta_keywords = $request->meta_keywords;
              $posts->meta_description = $request->meta_description;

              $posts->save();

            $request->session()->flash('success', 'News updated sucessfully');
            return redirect('/view-news');
            
        }else{

            return redirect('/edit-news/'.$id)->withErrors($validator)->withInput();

        }
    }


    function deletePost($id, Request $request){

        $posts = Post::where('id', $id)->first();

        if(!$posts){

            $request->session()->flash('success', 'Records not found');
            return redirect('products');
        }

        delete_img_db($id);
        Post::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
            return redirect('/view-news');

    }


    function postByCategory($id, Request $request){

        $categories = Category::orderBy('id', 'DESC')->get();
        //$posts = Post::orderBy('id', 'DESC')->get();
        $posts = Post::where('category_id ', $id)->where('status', 1)->orderBy('id', 'DESC')->paginate(20); // using paginate for pagination
        //return view('admin.postlist')->with(compact('categories', 'posts'));
        return view('frontend.posts')->with(compact('posts'));
    }


    function subHome($id){
        $catemobile = Category::orderBy('display_order', 'ASC')->limit(4)->get();
        //$categories = Category::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('display_order', 'ASC')->get();
        //$posts = Post::where('category', $id)->where('status', 1)->orderBy('id', 'DESC')->paginate(10);
        //$posts = Post::whereIn('category', array($id))->orderBy('id', 'DESC')->paginate(10);
        
        $posts= DB::table('posts')->whereRaw("find_in_set('$id',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(10);

       return view('layout.frontend.postslist')->with(compact('categories', 'catemobile', 'posts'));
    }

    function postDetails($category,$cate_id, Request $request)
    {
        // $catemobile = Category::orderBy('display_order', 'ASC')->limit(4)->get();
        // $categories = Category::orderBy('display_order', 'ASC')->get();
       // echo $category;die();
        //$category = Category::where('id', $category)->first();
        $posts = Post::where('category', $category)->where('status', 1)->first();
       // $category = Category::where('id', $cate_id)->first();
       // return $category->name; die();
       return view('details')->with(compact('posts', 'category'));

         
    }


    function teamPage()
    {
       
        // $catemobile = Category::orderBy('display_order', 'ASC')->limit(4)->get();
        // $categories = Category::orderBy('display_order', 'ASC')->get();

        $posts_team= DB::table('posts')->whereRaw("find_in_set('6',category)")->where('status', 1)->orderBy('id', 'ASC')->get();

        return view('team')->with(compact('posts_team'));
    }


    function searchNews(Request $request)
    {
        $searchkey= $request->searchkey;
        $categories = Category::orderBy('id', 'DESC')->get();
        $posts = Post::where('title', 'like', "%{$searchkey}%")->paginate(20); // using paginate for pagination
        return view('admin.postlist')->with(compact('categories', 'posts'));
        //echo $searchkey;
    }



}
