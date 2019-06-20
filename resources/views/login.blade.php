
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Đăng nhập</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/LOGIN.css') }}"/>
    </head>
    
    <body>
        
        <form action="{{route('logined')}}" method="POST">
        {{ csrf_field() }} 
        <a href="{{route('home')}}"><img src="https://cdn2.iconfinder.com/data/icons/bright-food-products/512/salt-512.png" alt="" height="50px" height="50px"> </a>
                       <h1>Login</h1> 
                       @include('error.note')
                       <div class="notifications" id="successMessage">{{ Session::get('success') }}</div>
                        <input placeholder="Tên đăng nhập" type="text" required="" name="username" value="{{old('username')}}">
                        <input placeholder="Mật khẩu" type="password" required="" name="password">
                        <a href="" >
                            <button type="submit">Đăng nhập</button>
                            </a>
                            <div class="forgotusername">
                            <a href="" margin-left="20px" class="link">Quên mật khẩu</a> . <a href="" class="link">Quên mật khẩu</a>
                            </div>
                        <br>
                        <p class="notifications">Lần đầu đến forums <a href="{{route('register')}}" class="link">Đăng ký</a></p>
                        <!-- <button onclick="location.href='{{url('/register')}}'" type="button">Register</button> -->
                            
        </form>
                   <script>  
                   $("document").ready(function(){
                        setTimeout(function(){
                             $("successMessage").remove();
                        }, 3000 ); 

});
                     </script>     
    </body>
   
</html>
