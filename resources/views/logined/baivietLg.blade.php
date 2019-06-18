@extends('logined.headerLogined')

@section('baivietLg')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Baiviet.css')}}"/>
    <title>Bài viết</title>

</head>

<body>
<div class="Mainchua">

    <!-- Page Content -->
    <div class="container">
        <div class="row">
 @foreach ($post as $po)
            <!-- Blog Post Content Column -->
            <div class="Noi-dung">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$po->subject}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{$po->username}}</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$po->created_at}}</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">{!! $po->content!!}</p>

                <hr>
                @endforeach
                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form" action="{{route('comment',$po->id_post)}}" method="POST">
                    {{ csrf_field() }} 
                        <div class="form-group">
                            <textarea class="form-control" rows="5" cols="150" name="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
                @foreach ($comment as $co)

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="" width="40px" height="40px">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{$co->username}}
                            <small>{{$co->created_at}}</small>
                        </h4>
                        {!! $co->comment_content !!}
                    </div>
                </div>
                @endforeach
               

            </div>
               
            </div>

        </div>
        </div>
</body>

</html>
@endsection('baivietLg')

