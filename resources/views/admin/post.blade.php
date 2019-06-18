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
    <div class="main">
        <div class="form-group" >
        <label>Chọn danh mục</label>
                </div>
             
        <div class="col-md-3 form-group">
            <select class="Option" id="singleSelectTextDDJS" >
                <option value="100"></option>
                <option value="0">Quan điểm - Tranh luận</option>
                <option value="1">Truyền cảm hứng</option>
                <option value="2">Khoa học - Công nghệ</option>
                <option value="3">Science2vn</option>
                <option value="4">Thể thao</option>
                <option value="5">Game</option>
                <option value="6">Sự kiện Spiderum</option>
                <option value="7">Otakulture</option>
                <option value="8">Sáng tác</option>
                <option value="9">Comics</option>
                <option value="10">Phim</option>
                <option value="11">Sách</option>
                <option value="12">Du lịch - Ẩm thực</option>
                <option value="13">Kỹ năng</option>
                <option value="14">Âm nhạc</option>
                <option value="15">English Zone</option>
                <option value="16">Chuyện trò - Tâm sự</option>
            </select>
        </div>
            </div>
        </div>
    </div>
                        </div>
                </div></div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="main">
            <div class="container" style="padding-bottom:120px">
                        <form action="/update-post/{{ $post[0] -> id_post}}" method="POST">
                        {{ csrf_field() }} 
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" value="{{ $post[0] -> subject}}" name="title" placeholder="Tiêu đề bài viết" />
                            </div>
                            
                            <textarea id="editor1" value="" name="editor1" cols="80" rows="10">
                               {{ $post[0] -> content}}
                       </textarea>
   
                             <!-- (3): Code Javascript thay thế textarea có id='editor1' bởi CKEditor -->
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
                        </form>
                    </div>
                </div>
                 <!-- /.row -->
                 </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    <script>
            /* Thêm hoặc xóa class show ra khỏi phần tử */
            function myFunction(id) {
                document.getElementById(id).classList.toggle("show");
            }
            //lấy tất cả các button menu
            var buttons = document.getElementsByClassName('dropbtn');
            //lấy tất cả các thẻ chứa menu con
            var contents = document.getElementsByClassName('dropdown-content');
            //lặp qua tất cả các button menu và gán sự kiện
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].addEventListener("click", function(){
                    //lấy value của button
                    var id = this.value;
                    //ẩn tất cả các menu con đang được hiển thị
                    for (var i = 0; i < contents.length; i++) {
                        contents[i].classList.remove("show");
                    }
                    //hiển thị menu vừa được click
                    myFunction(id);
                });
            }
            //nếu click ra ngoài các button thì ẩn tất cả các menu con
            window.addEventListener("click", function(){
                 if (!event.target.matches('.dropbtn')){
                    for (var i = 0; i < contents.length; i++) {
                        contents[i].classList.remove("show");
                    }
                 }
            });
        </script>
       
</body>

</html>




@endsection('postLg')

