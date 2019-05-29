<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\post;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $post = new Post();
        $post->subject=$request->title;
        $post->short_content=substr($request->editor1,0,200);
        $post->content=$request->editor1;
        $post->user_created_id=1;
        $post->box_id=3;
        $post->save();
        return redirect('/');
    }
}
