
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/LOGIN.css') }}"/>
    </head>
    
    <body>
        
        <form action="{{route('logined')}}" method="POST">
        {{ csrf_field() }} 
                       <h1>Login</h1> 
                       <div class="notifications" id="successMessage">{{ Session::get('success') }}</div>
                        <input placeholder="Username" type="text" required="" name="username">
                        <input placeholder="Password" type="password" required="" name="password">
                        <a href="" >
                            <button type="submit">Login</button>
                            </a>
                            <div class="forgotusername">
                            <a href="" margin-left="20px" class="link">Forgot username</a> . <a href="" class="link">Forgot Password</a>
                            </div>
                        <br>
                        <p class="notifications">New to Forums <a href="/muoiRoom/public/register" class="link">Sign up</a></p>
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
