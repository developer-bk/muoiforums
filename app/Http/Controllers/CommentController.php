<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Quotation;
use View;
use Session;
use App\comment;
use Illuminate\Support\Facades\Redirect;


class CommentController extends Controller
{
    //
    public function postComment(Request $request)
    {
        if (Session::has('user')) 
        {
            $id_post = $request['id_post'];
            $user_id = Session::get('user')->id;
            $comment = new Comment();
            $comment->post_id=$id_post;
            $comment->user_id=$user_id;
            $comment->comment_content=$request->comment;
            $comment->save();
            return back();
        } else {
            $id_post = $request['id_post'];
            Session::put('post_viewing',$id_post);
            return redirect()->route('login')->withInput()->with('error','Bạn phải đăng nhập để bình luận');
        }
        

    }
}
