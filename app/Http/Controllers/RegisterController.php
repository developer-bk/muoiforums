<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Users;
use App\Quotation;
use View;
use Illuminate\Support\Facades\Redirect;


class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister(Request $request){
        $validatedData = $request->validate([
            'username'=>'required|unique:users|min:6|max:32',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password'
        ],[
            'username.required'=>'Bạn chưa nhập tên đăng nhập',
            'username.min'=>'Tên đăng nhập phải có tối thiểu 6 ký tự',
            'username.unique'=>'Username đã tồn tại',
            'email.required'=>'Bạn chưa nhập email',
            'email.unique'=>'Email đã tồn tại',
            'email.email'=>'Email chưa đúng định dạng',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có tối thiểu 6 ký tự',
            'confirm_password.same'=>'Mật khẩu không trùng khớp'
        ]);
        
            $user = New Users;
            $user->username=$request->username;
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->first_name=$request->first_name;
            $user->last_name=$request->last_name;
            $user->id_decentralization=3;
            $user->id_status=0;
            $user->save();
            $success='Registered successfully, please login...!';
            return Redirect::route('login')->with( ['success' => $success] );
        
    }
}
