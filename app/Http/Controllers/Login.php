<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use View;
class Login extends Controller
{
    public function login()
    {
        $success='';
        return View::make('login', compact('success'));
    }

    public function infoLogin(Request $request)
    {
        // $data = $request->all();
        return "hahah";
    }
}
