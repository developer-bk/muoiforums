<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/headerLG.css')}}"/>
        <meta charset="utf-8"/>
        <title>
            <img src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwia8bHXkcHiAhVB-WEKHQ5RAsAQjRx6BAgBEAQ&url=https%3A%2F%2Fwall.alphacoders.com%2Fby_sub_category.php%3Fid%3D173906%26name%3DSpider-Man%2BWallpapers&psig=AOvVaw03cXL60qNyz0QcqOhm6RRm&ust=1559232993179923" alt=""> Muoi
        </title>
    </head>
    <body>
    <div class="Header">
        <div class="top">
            <div class="Logo" >
                <a href="{{route('home')}}">
                <img src="icon.png" height="50" width="50">
                <ul>
                    <li>MUOIROOM</li>
                </ul>
                </a>
             </div>
            <div class="search">
                <img src="https://img.icons8.com/ios/2x/search.png" width="30px" height="30px" style="float: left;margin-top: 10px ">
                <form novalidate="" class="search-form" style="float: left" action="{{route('tim-kiem')}}" method="POST">
                {{ csrf_field() }} 
                        <input class="input-searchform" formControlName="keyword" name="search" placeholder="Tìm kiếm" type="text" value=""  style="">
                        <button style="margin-top: 10px;margin-left:5px; height:35px; width: 80px; background-color:white;  " >Tìm Kiếm</button>
                </form>
            </div>
            <div class="l-r">
                <ul class="Post">
                        <li><a href="{{route('viet-bai')}}">Viết bài</a></li> 
                </ul>
                <img class="avatar" src= "{{ Session::get('user')->avatar}}"  height="50" width="50" style="border-radius:50%">
                <button onclick="myFunction()" class="dropbtn">{{Session::get('user')->username}}<span><img src="" height="10px" width="10px"></span></button>
                <div id="myDropdown" class="dropdown-content">
                        <a href="">Trang cá nhân</a> 
                        <a href="">Tin nhắn</a> 
                        <a href="">Bài viết của bạn</a> 
                        <a href="">Lịch sử bình luận</a> 
                        <a href="{{route('cai-dat',Session::get('user')->username)}}">Cài đặt tài khoản</a> 
                        <a href="{{route('logout')}}">Đăng xuất</a> 
                </div>
            </div>
        <div class="bot">
            <div class="menu-bot">
                    <ul>
                        <li>                                    
                            <a  href="">Cho bạn</a>
                        </li>
                        <li>
                            <a  href="">Tất cả</a>
                        </li>
                        <li>
                            <a href="">Thành viên nổi bật</a>
                        </li>
                        <li>
                            <a href="">Quan điểm - Tranh luận</a>
                        </li>
                        <li>
                            <a href="">Science2vn</a>
                        </li>
                        <li>
                            <a href="">Sách</a>
                        </li>
                        <li>
                            <a href="">Danh mục khác</a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    </div>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>
    </body>
@yield('mainLg')
@yield('postLg')
@yield('baivietLg')
@yield('setting')
</html>

