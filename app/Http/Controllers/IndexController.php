<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function index(){
        //$catemobile = Category::where('home', 1)->orderBy('display_order', 'ASC')->limit(4)->get();
        //$categories = Category::where('home', 1)->orderBy('display_order', 'ASC')->get();
        //$posts_top = Post::where('category', 1)->orderBy('id', 'DESC')->first();
        //$posts_sectop = Post::where('lead', 1)->where('home', 1)->where('status', 1)->orderBy('id', 'DESC')->skip(1)->take(3)->get();
        $posts_top= DB::table('posts')->whereRaw("find_in_set('1',category)")->where('status', 1)->orderBy('id', 'DESC')->first();

        $posts_lead= DB::table('posts')->whereRaw("find_in_set('1',category)")->where('status', 1)->orderBy('id', 'DESC')->skip(1)->take(2)->get();

        $post_topstory= DB::table('posts')->whereRaw("find_in_set('6',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);   
        $post_opinion= DB::table('posts')->whereRaw("find_in_set('8',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);


        $post_national= DB::table('posts')->whereRaw("find_in_set('13',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);
        $post_politics= DB::table('posts')->whereRaw("find_in_set('9',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);
        $post_court= DB::table('posts')->whereRaw("find_in_set('18',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);
        $post_buseco= DB::table('posts')->whereRaw("find_in_set('10',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);
        $post_business= DB::table('posts')->whereRaw("find_in_set('14',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);
        $post_neighbour= DB::table('posts')->whereRaw("find_in_set('11',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);
        $post_int= DB::table('posts')->whereRaw("find_in_set('16',category)")->where('status', 1)->orderBy('id', 'DESC')->paginate(4);

        

        return view('layout.frontend.index')->with(compact('posts_lead', 'posts_top', 'post_topstory', 'post_opinion', 
        'post_national', 'post_politics', 'post_court', 'post_buseco', 'post_business', 'post_neighbour', 
        'post_int'));
    }
}
