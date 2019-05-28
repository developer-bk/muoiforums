<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Quotation;
use View;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];

        if (Auth::attempt(['username'=>$username,'password'=>$password]))
        return redirect()->action('MyController@index');
            else {
                return View("login");
            }
               
            
    }
}
