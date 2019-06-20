<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Đăng ký</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/DangKi.css') }}"/>
    </head>
    <body>
    

        <form action = "{{ route('register')}}" method="POST">
        {{ csrf_field() }} 
            <h1>Register</h1> 
             <input name="Tên đăng nhập" placeholder="Username*" type="input" >
             @if ($errors->has('username'))
                <div class="error">{{ $errors->first('username') }}</div>
            @endif
             <input name="email" placeholder="Email*" type="input" >
             @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
             <input name="first_name" placeholder="Tên" type="input" >
             <input name="last_name" placeholder="Họ" type="input" >
             <input name="password" placeholder="Mật khẩu*" type="password" >
             @if ($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
            @endif
             <input name="confirm_password" placeholder="Xác nhận mật khẩu*" type="password" required="">
             @if ($errors->has('confirm_password'))
                <div class="error">{{ $errors->first('confirm_password') }}</div>
            @endif
             <a>
             <button type="submit" >Đăng ký</button>
             </a>
             
             <p class="notice">Bạn đã có tài khoản? <a href="{{route('login')}}" class="link">Đăng nhập ngay</a></p>
             
</form>
    </body>
</html>
