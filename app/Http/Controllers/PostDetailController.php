<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


class PostDetailController extends Controller
{
    //
    public function detail(Request $request)
    {
        $id_post=$request['id_post'];
        $post= DB::table('post')
        ->where('id_post','=',$id_post)
        ->get();

    }
}
