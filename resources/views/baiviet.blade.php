@extends('header')

@section('baiviet')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Baiviet.css')}}"/>
    <title>Bài viết</title>

</head>

<body>

    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="Noi-dung">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>Thuê trọ bị chó cắn. Chuyện đùa mà như thật</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Muối hột </a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2019 at 9:00 PM</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">Cô bé đi thuê trọ bị chó cắn huhuhuhu</p>
                <p>Vào ngày xx/xx/xxxx cô bé Lệ đi thuê trọ nhưng không may rằng bị con chó nhà chủ cắn một nhát sâu 10cm.</p>
                <p>Chủ nhà không chịu chịu trách nghiệm.</p>
                <p>Lệ phải đi tiêm 3 mũi thuốc.</p>
                <p>Tội nghiệp Lệ.</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" cols="150"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="" width="40px" height="40px">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Việt Ngiện
                            <small>August 25, 2019 at 9:30 PM</small>
                        </h4>
                        Thương chị bị chó cắn. Huhu
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="" width="40px" height="40px">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Hưng Phạm
                            <small>August 25, 2019 at 9:30 PM</small>
                        </h4>
                        Cho nó củ riềng vs xả là sợ ngay.
                    </div>
                </div>

            </div>
                
            </div>

        </div>
</body>

</html>
@endsection('baiviet')

