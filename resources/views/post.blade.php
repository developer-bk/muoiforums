@extends('header')


                      
@section('post')
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
            <label>Tags</label>
            <input class="form-control" name="txtTag" placeholder="Chọn tag hoặc tìm kiếm" />
        </div>       
        <div class="form-group" >Chọn tối đa <b>5</b> tag để câu chuyện của bạn dễ dàng đến với mọi người hơn</div>
                </div>
    <div class="dropdown" style="margin-bottom: 20px">
        <button style="margin-left:15px" value="tag" class="dropbtn" style="display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        user-select: none;
        background-image: none;
        border: 1px solid black;
        border-radius: 4px;
        "
        >Chọn thể loại</button>
            <div id="tag" class="dropdown-content">
                <div class="dropdown-menu">
                    <div class="dropdown-search">
                        <div class="icon">
                            <img src="https://img.icons8.com/ios/2x/search.png" width="18px" height="16px" alt="">
                        </div>
                        <input autocomplete="off" class="input untouched pristine valid" formcontrolname="keyword" id="category-search" name="keyword" placeholder="Tìm danh mục" type="text">
                    </div>
                    <ul class="list-item list-unstyled">
                        <!----><li>
                            <a>Quan điểm - Tranh luận</a>
                        </li><li>
                            <a>Truyền cảm hứng</a>
                        </li><li>
                            <a>Khoa học - Công nghệ</a>
                        </li><li>
                            <a>Science2vn</a>
                        </li><li>
                            <a>Thể thao</a>
                        </li><li>
                            <a>Game</a>
                        </li><li>
                            <a>Sự kiện Spiderum</a>
                        </li><li>
                            <a>Otakulture</a>
                        </li><li>
                            <a>Sáng tác</a>
                        </li><li>
                            <a>Comics</a>
                        </li><li>
                            <a>Phim</a>
                        </li><li>
                            <a>Sách</a>
                        </li><li>
                            <a>Du lịch - Ẩm thực</a>
                        </li><li>
                            <a>Kỹ năng</a>
                        </li><li>
                            <a>Âm nhạc</a>
                        </li><li>
                            <a>English Zone</a>
                        </li><li>
                            <a>Chuyện trò - Tâm sự</a>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
                        </div>
                </div></div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="main">
            <div class="container" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="txtName" placeholder="Tiêu đề bài viết" />
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
                            <div class="form-group">
                                <label>Tag: Nhập hoặc tìm kiếm tag</label>
                                <input class="form-control" name="txtTag" Placeholder="nhập thể loại">
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




@endsection('post')

