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

class MyController extends Controller
{
    public function xinchao()
    {
        echo "Heeloooooo";
    }

    public function myURL(Request $request)
    {
        return $request -> url();
    }

    public function getForms()
    {
        return view('form');
    }

    public function postForms(Request $request)
    {
        echo $request->hoten;
    }

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
        return view('test',['name'=>$name]);
    }

    public function route($link)
    {
        return view('header',['link'=>$link]);
    }

   
    public function index()
    {
        
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
                ->get();
            return View::make('main',compact('post'));
        
    }

    
}
