@extends('logined.headerLogined')
         
@section('postLg')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/postbai.css') }}"/>
    <script type="text/javascript" language="javascript" src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

    <title>Tạo bài viết mới</title>
</head>

<body>  
<div class="PostBai">    
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="main">
            <div class="title">
                <h1 class="page-header">Viết bài
                    </h1>
                </div>
   
        </div>
    </div>
                        </div>
                </div></div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="main">
            <div class="container" style="padding-bottom:120px">
            <form action="{{route('viet-bai')}}" method="POST">
            <div class="form-group" >
        <label>Chọn danh mục</label>
                </div>
             
        <div class="col-md-3 form-group">
            <select class="Option" id="singleSelectTextDDJS" name="box">
                <option value="100"></option>
                
                @foreach ($box as $b)
                <option value="{{$b->id_box}}">{{$b->name_box}}</option>
                @endforeach
            </select>
        </div>
            {{ csrf_field() }} 
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="subject" placeholder="Tiêu đề bài viết" />
                            </div>
                            
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea id="editor1" name="editor1" cols="80" rows="10">
                                </textarea>
                                <script>
                                    CKEDITOR.replace('editor1');
                        </script> 
                            <br>
                              <div class="form-group">
                                <label>Images</label>
                                <a href=https://2.pik.vn target="_blank">
                                <button type="button" >adasda</button>
                                </a>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Đăng bài</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    
       
</body>

</html>


@endsection('postLg')

