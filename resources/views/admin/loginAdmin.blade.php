
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/LOGIN.css') }}"/>
    </head>
    
    <body>
        
        <form action="{{route('loginedAdmin')}}" method="POST">
        {{ csrf_field() }} 
        <a href="{{route('home')}}"><img src="https://cdn2.iconfinder.com/data/icons/bright-food-products/512/salt-512.png" alt="" height="50px" height="50px"> </a>
                       <h1>Login</h1> 
                       @include('error.note')
                       <div class="notifications" id="successMessage">{{ Session::get('success') }}</div>
                        <input placeholder="Username" type="text" required="" name="username" value="{{old('username')}}">
                        <input placeholder="Password" type="password" required="" name="password">
                        <a href="" >
                            <button type="submit">Login</button>
                            </a>
                            <div class="forgotusername">
                            </div>
                        <br>
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
