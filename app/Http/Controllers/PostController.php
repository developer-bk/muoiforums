<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\post;
use Session;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $post = new Post();
        $post->subject=$request->title;
        $post->short_content=substr($request->editor1,0,200);
        $post->content=$request->editor1;
        $post->user_created_id=Session::get('user')->id;
        $post->box_id=3;
        $post->save();
        return redirect('/');
    }

    public function getPost() 
    {
        if (Session::has('user') )
        {
            return view('logined.postLg');
        } 
        else 
        {
            return view('login');
        }
    }
}
