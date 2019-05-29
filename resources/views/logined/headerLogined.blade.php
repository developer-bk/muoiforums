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
            <div class="Logo">
                <a href="">
                <img src="icon.png" height="50" width="50">
                <ul>
                    <li>MUOIROOM</li>
                </ul>
                <a>
             </div>
            <div class="search">
                <img src="" >
                <form novalidate="" class="searchform" >
                        <input class="input-searchform" formControlName="keyword" name="keyword" placeholder="Tìm kiếm" type="text" value="">
                </form>
            </div>
            <div class="l-r">
                <ul class="Post">
                        <li><a href="/muoiroom/public/viet-bai">Viết bài</a></li> 
                </ul>
                <img class="avatar" src="a.png.png" height="50" width="50">
                <button class="dropbtn">Thông tin</button>
                <div class="dropdown-content">
                        <a href="">Trang cá nhân</a> 
                        <a href="">Tin nhắn</a> 
                        <a href="">Bài viết của bạn</a> 
                        <a href="">Lịch sử bình luận</a> 
                        <a href="{{route('cai-dat')}}">Cài đặt tài khoản</a> 
                        <a href="{{asset('logout')}}">Đăng xuất</a> 
                </div>
            </div>
        <div class="bot">
            <div class="menubot">
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
    </body>
</html>

@yield('main')
@yield('post')
@yield('baiviet')