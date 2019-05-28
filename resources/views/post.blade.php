@extends('header')

@section('post')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/postbai.css') }}"/>
    
    <title>Tạo bài viết mới</title>
    <script type="text/javascript" language="javascript" src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
</head>

<body>
<form action="" method="post">
<div class="container" style="padding-bottom:120px">
                        <form action="{{route('viet-bai')}}" method="POST">
                        {{ csrf_field() }} 
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="subject" placeholder="Tiêu đề bài viết" />
                            </div>
                            <textarea id="editor1" name="editor1" cols="80" rows="10">
                       </textarea>
   
                             <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
                          <script>
                                    CKEDITOR.replace('editor1');
                        </script> 
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
   
   <!-- (2): textarea sẽ được thay thế bởi CKEditor -->
      
       
</form>
   
  
</body>

</html>

@endsection('post')

