<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Quotation;
use View;
use Session;
use DB;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];

        if (Auth::attempt(['username'=>$username,'password'=>$password]))
        {
            $user=Auth::user();
            Session::put('user',$user);
            if (Session::has('post_viewing')) 
            {
                $id_post=Session::get('post_viewing');
                $post= DB::table('post')
                ->where('id_post','=',$id_post)
                ->join('users','post.user_created_id','=','users.id')
                ->join('box','post.box_id','=','box.id_box')
                ->select(
                    'post.*',
                    'users.id',
                    'users.username',
                    'users.avatar',
                    'box.id_box',
                    'box.name_box'
                )
                ->get();
        
                $comment = DB::table('comment')
                ->where('post_id','=',$id_post)
                ->join('users','comment.user_id','=','users.id')
                ->select(
                    'comment.*',
                    'users.*'
                )
                ->get();
                if (Session::has('user')) {
                    return View::make('logined.baivietLg',compact('post','comment'));
                } else {
                    return View::make('baiviet',compact('post','comment'));
                }

            } else {
                return redirect()->action('MyController@index');
            }
           
        }
        
            else {
                return back()->withInput()->with('error','Tài khoản hoặc mất khẩu chưa đúng');
            }
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('user');
        return redirect()->action('MyController@index');
    }
}
