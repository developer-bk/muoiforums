<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Quotation;
use View;
use Session;

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
            return redirect()->action('MyController@index');
           
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
