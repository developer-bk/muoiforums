<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/DangKi.css') }}"/>
    </head>
    <body>
    

        <form action = "{{ route('register')}}" method="POST">
        {{ csrf_field() }} 
            <h1>Register</h1> 
             <input name="username" placeholder="Username*" type="input" >
             @if ($errors->has('username'))
                <div class="error">{{ $errors->first('username') }}</div>
            @endif
             <input name="email" placeholder="Email*" type="input" >
             @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
             <input name="first_name" placeholder="Firstname" type="input" >
             <input name="last_name" placeholder="Lastname" type="input" >
             <input name="password" placeholder="Password*" type="password" >
             @if ($errors->has('password'))
                <div class="error">{{ $errors->first('password') }}</div>
            @endif
             <input name="confirm_password" placeholder="Confirm Password*" type="password" required="">
             @if ($errors->has('confirm_password'))
                <div class="error">{{ $errors->first('confirm_password') }}</div>
            @endif
             <a>
             <button type="submit" >Register</button>
             </a>
             
             <p class="notice">You already have an account <a href="/muoiRoom/public/login" class="link">Login Now</a></p>
             
</form>
    </body>
</html>
