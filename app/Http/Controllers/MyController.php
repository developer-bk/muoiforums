<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\users;
use App\post;
use App\box;
use DB;
use App\Quotation;
use View;
use Session;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
  

   


    public function setCookie()
    {
        $response = new Response();
        $response->withCookie('viet','BKHN-SAMI','1');
        return $response;
    }

    public function getCookie(Request $request)
    {
        return $request->cookie('viet');
    }

    public function uploadFile()
    {
        return view('uploadFile');
    }

    public function postFile(Request $request){
        if ($request->hasFile('myfile'))
        {
            $file = $request->file('myfile');
            $name=$file->getClientOriginalName('myfile');
            $file->move('/Users/nguyenviet/coding/myForums/public/img',$name);

        } 
        else 
        {
            echo 'chua cos file';
        }
    }

    public function passData($name)
    {
        return $name;
    }

    public function route($link)
    {
        return view('header',['link'=>$link]);
    }

   
    public function index()
    {
        if (Session::has('user'))
        {
            // echo Session::get('user');
        }
           
        
        
            $post=DB::table('post')
                ->join('users', 'post.user_created_id','=','users.id')
                ->join('box','post.box_id','=','box.id_box')
                ->select(
                    'post.*',
                    'users.id',
                    'users.username',
                    'users.avatar',
                    'box.id_box',
                    'box.name_box')
                    ->orderBy('post.updated_at','desc')
                    ->paginate(10)  ;
                
                    if (Session::has('user')) {
                        return View::make('logined.mainLg',compact('post'));
                    } else {
                        return View::make('main',compact('post'));
                    }
        
    }

    public function indexByUser(Request $request) {

        $user_id = $request['id'];

        $post=DB::table('post')
        ->where('user_created_id','=',$user_id)
        ->join('users', 'post.user_created_id','=','users.id')
        ->join('box','post.box_id','=','box.id_box')
        ->select(
            'post.*',
            'users.id',
            'users.username',
            'users.avatar',
            'box.id_box',
            'box.name_box')
            ->orderBy('post.updated_at','desc')
            ->get()  ;
        
            if (Session::has('user')) {
                return View::make('logined.mainLg',compact('post'));
            } else {
                return View::make('main',compact('post'));
            }
    }

    public function indexByBox(Request $request) 
    {
        $id_box = $request['id_box'];

        $post=DB::table('post')
        ->where('box_id','=',$id_box)
        ->join('users', 'post.user_created_id','=','users.id')
        ->join('box','post.box_id','=','box.id_box')
        ->select(
            'post.*',
            'users.id',
            'users.username',
            'users.avatar',
            'box.id_box',
            'box.name_box')
            ->orderBy('post.updated_at','desc')
            ->get()  ;
        
            if (Session::has('user')) {
                return View::make('logined.mainLg',compact('post'));
            } else {
                return View::make('main',compact('post'));
            }
    }

    public function postDetail(Request $request)
    {
        $id_post=$request['id_post'];
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
    }

    public function search(Request $request) 
    {
        $keyword = $request['search'];
        $post = DB::table('post')
        ->where('subject','like',"%{$keyword}%")
        ->orWhere('content','like',"%{$keyword}%")
        ->join('users', 'post.user_created_id','=','users.id')
        ->join('box','post.box_id','=','box.id_box')
        ->select(
            'post.*',
            'users.id',
            'users.username',
            'users.avatar',
            'box.id_box',
            'box.name_box')
        ->orderBy('post.created_at','desc')
        ->get();
        if (Session::has('user')) {
            return View::make('logined.mainLg',compact('post'));

        } else {
            return View::make('main',compact('post'));
        }
    }
    
}
