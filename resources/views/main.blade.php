@if(Auth::check())
    @extends('logined.headerLogined')
@endif

@section('main')
<!DOCTYPE html>
<html lang="en">

<head>

       <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>
    <title>Home</title>

</head>

<body>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="Menuphu">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                        Menu
                    </li>
                    <li href="#" class="list-group-item menu1">
                        Đang Hot
                    </li>
                    <li href="#" class="list-group-item menu1">
                            Mới nhất
                    </li>
                    <li href="#" class="list-group-item menu1">
                            Sôi nổi
                    </li>
                    <li href="#" class="list-group-item menu1">
                            Top
                    </li>
                    </ul>
            </div>

            <div class="MainTintuc ">
                <div class="panel panel-default">
                    @foreach ($post as $po)
                    <div class="container">
                    <span style="margin-top: 20px">
                                    <br>
                                <div class="row" >
                                    <div class="UserPost">
                                        
                                            <a class="avatar" href="/nguoi-dung/ThanhLuongTra"><img src="https://s3-ap-southeast-1.amazonaws.com/img.spiderum.com/sp-xs-avatar/23c3a6605a7c11e9b5f79713be1ea500.jpg" alt="avatar" class=""></a>
                                            <div>
                                            <hover-profile><span class="hover-username">
                        
                                            <a class="username" href="/nguoi-dung/ThanhLuongTra" style="font-size: 20px">
                                            {{$po->username}}
                                            </a>
                                            </span></hover-profile>
                                                    trong
                                                    <a class="category-name" href="/s/truyen-cam-hung/hot">{{$po->name_box}}</a>
                                            </div>
                                            <div class="created">
                                                
                                                    <span class="date">{{$po->created_at}}</span>
                                                    <!----><span> &nbsp; · &nbsp; 5 phút đọc</span>
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="login.html">
                                            <br>
                                                <img width="200px" height="200px" class="img-responsive" src="https://scontent.fhan2-1.fna.fbcdn.net/v/t1.0-9/58381907_1662923087185411_5549577301005434880_n.jpg?_nc_cat=103&_nc_oc=AQkHova275fIAdDYOYyt3VAdgdeNORQCv2l6ZMENzKxyRx03iSv0OH_KyvwxrvWN7po&_nc_ht=scontent.fhan2-1.fna&oh=c7b1f98800a6540ba0eaaf604bd2e60a&oe=5D9F63FD" alt="ấdsd">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                    <a href="{{route('bai-viettt',$po->id_post)}}">
                                        <h3 class="">{{$po->subject}}</h3>
                                        </a>
                                        <p> {{$po->short_content}}</p>
                                        <a class="btn btn-primary" href="{{route('bai-viettt',$po->id_post)}}">Xem chi tiết</a>
                                    </div>
                                </div>
                            <div class="break"></div>
                            </span> 
                    
                  
                    
    </div>
    @endforeach
        </div>
        
        <div class="row text-center">
                <div class="Thanhchuyen">
                    <ul class="pagination">
                        <li>
                            <a href="#">&laquo;</a>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
</div>

            
    </div>
</div>

</body>

</html>

@endsection('main')