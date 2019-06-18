<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\post;
use Session;
use View;
use DB;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $post = new Post();
        $post->subject=$request->subject;
        $post->short_content=substr($request->editor1,0,200);
        $post->content=$request->editor1;
        $post->user_created_id=Session::get('user')->id;
        $post->box_id=$request->box;
        $post->save();
        return redirect('/');
    }

    public function getPost() 
    {
        if (Session::has('user') )
        {
            $box=DB::table('box')
            
            ->select('box.*')
                ->get();
            
                
           return View::make('logined.postLg',compact('box'));
        } 
        else 
        {
            return view('login');
        }
    }
}
