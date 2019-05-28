<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class SettingController extends Controller
{
    //
    public function setting()
    {
        return view('setting');
    }
}
