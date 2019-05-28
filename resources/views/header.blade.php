
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}"/>
        <meta charset="utf-8"/>
        <title>
             Muoi
        </title>
    </head>
    <body>
    <div class="Header">
        <div class="top">
            <div class="Logo">
                <a href="/muoiRoom/public/">
                <img src="icon.png" height="50" width="50">
                <ul>
                    <li>MUOIROOM</li>
                </ul>
            </a>
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
                    <ul class="dn">                   
                            <li><a href="register">Đăng ký</a></li>
                            <li><a href="login">Đăng nhập</a></li>
            </ul>  
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