  @extends('header')


<!DOCTYPE html>
@section('main')
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
                    <a href="{{route('hot')}}"> <li href="{{route('hot')}}" class="list-group-item menu1">
                        Đang Hot
                    </li></a>
                    
                    <a href="{{route('newest')}}"> <li href="{{route('newest')}}" class="list-group-item menu1">
                        Mới nhất
                    </li></a>
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
                                        
                                            <a class="avatar" href="{{route('indexByUser',[$po->username,$po->id])}}"><img src="{{$po->avatar}}" alt="avatar" class=""></a>
                                            <div>
                                            <hover-profile><span class="hover-username">
                        
                                            <a class="username" href="{{route('indexByUser',[$po->username,$po->id])}}" style="font-size: 20px">
                                            {{$po->username}}
                                            </a>
                                            </span></hover-profile>
                                                    trong
                                                    <a class="category-name" href="{{route('indexByBox',[$po->id_box,$po->name_box])}}">{{$po->name_box}}</a>
                                            </div>
                                            <div class="created">
                                                
                                                    <span class="date">{{$po->created_at}}</span>
                                                    <span> {{$po->count_view}} lượt xem</span>
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="login.html">
                                            <br>
                                                <img width="200px" height="200px" class="img-responsive" src="{{$po->image}}" alt="ấdsd">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                    <a href="{{route('bai-viettt',$po->id_post)}}">
                                        <h3 class="">{!!$po->subject!!}</h3>
                                        </a>
                                        <p> {!!$po->short_content!!}</p>
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
    @include('footer')

</div>

</body>
@endsection('main')
</html>

