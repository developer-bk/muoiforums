<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Session;



class SettingController extends Controller
{
    //
    public function getSetting(Request $request)
    {
        $username=$request['username'];
        if ($username === Session::get('user')->username) {
            return view('setting');
        } else {
            return back();
        }
    }

    public function postSetting(Request $request)
    {

    }
}
