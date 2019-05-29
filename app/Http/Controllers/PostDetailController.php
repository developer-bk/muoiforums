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
        echo $id_post;
    }
}
