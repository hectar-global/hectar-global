<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    function listVideo()
    {
        
        $videos = Video::where('status', 1)->paginate(14);
        return view('video')->with(compact('videos'));
    }

    function addVideo()
    {
        return view('admin.add-video');
    }

    function saveVideo(Request $request)
    {
        //return "Hello"; die();

        $validator = Validator::make($request->all(), [
             'code' => ['required', 'max:255'],
            // 'home' => ['required'],
            'status' => ['required', 'not_in:-- Select --'],
        ]);
      

        if($validator->passes()) {
            $posts = new Video;

            $posts->code = $request->code;
            $posts->home = $request->home;
            $posts->status = $request->status;


            $posts->save();

            $request->session()->flash('success', 'Video Added sucessfully');
            return redirect('/video-list');
            
        }else{

            return redirect('/add-video')->withErrors($validator)->withInput();

        }
    }


    function videoList(){      
        $videos = Video::orderBy('id', 'DESC')->paginate(20); // using paginate for pagination
        return view('admin.videoslist')->with(compact('videos'));
    }



    function editVideo($id, Request $request){
    
        $videos = Video::where('id', $id)->first();
    
        if(!$videos){
            $request->session()->flash('error', 'Records not found');
            return redirect('videoslist');
        }
            
        return view('admin.edit-video')->with(compact('videos'));
    
    }

    function updateVideo($id, Request $request){

        $validator = Validator::make($request->all(), [
            'code' => ['required', 'max:255'],
            'home' => ['required', 'not_in:-- Select --'],
        ]);

        if($validator->passes()) {
            $videos = Video::find($id);

            $videos->code = $request->code;
            $videos->home = $request->home;
            $videos->status = $request->status;
            $videos->save();

            $request->session()->flash('success', 'Video updated sucessfully');
            return redirect('/video-list');
            
        }else{

            return redirect('/update-video/'.$id)->withErrors($validator)->withInput();
            
        }   
    }


    function deleteVideo($id, Request $request){

        $videos = Video::where('id', $id)->first();

        if(!$videos){

            $request->session()->flash('success', 'Records not found');
            return redirect('/view-categories');
        }

        Video::where('id', $id)->delete();
        $request->session()->flash('success', 'Records has been deleted sucessfully');
            return redirect('/video-list');

    }


}
