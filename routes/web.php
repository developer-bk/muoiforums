<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Login
Route::get("login","Login@login")->name('login');

//Register
Route::get("register","RegisterController@getRegister")->name('register');
Route::post('register',"RegisterController@postRegister");

//login
Route::post('logined','AuthController@login')->name('logined');
//login admin 
Route::post('admin','AdminController@login')->name('loginedAdmin');
//

//chi tiet bai viet
Route::get('bai-viet/{id_post}','MyController@postDetail')->name('bai-viettt');


Route::get("loginedddd/header", function(){
    return view('headerlg');
}) ->name('headerlg');


Route::get('/', 'MyController@index')->name('home'); 
Route::get('dang-hot','MyController@postHot')->name('hot');
Route::get('moi-nhat','MyController@newest')->name('newest');

//Viet bai
Route::get('viet-bai', 'PostController@getPost')->name('viet-bai');
Route::post('viet-bai','PostController@post');


//logout
Route::get('logout','AuthController@logout')->name('logout');

//COmment
Route::post('comment/{id_post}','CommentController@postComment')->name('comment');


//ài đặt tài khoản 
Route::get('cai-dat/{username}','SettingController@getSetting')->name('cai-dat');
Route::post('cai-dat','SettingController@postSetting')->name('cai-datt');

//danh muc
Route::get('danhmuct','MyController@getDanhMuc')->name('danhmuc');

//Tim-kiem
Route::post('tim-kiem','MyController@search')->name('tim-kiem');

//post by user
Route::get('/{user_name}/{id}','MyController@indexByuser')->name('indexByUser');

//post by box 
Route::get('indexByBox/{id_box}/{name_box}','MyController@indexByBox')->name('indexByBox');

//Set admin
// Route::get('bai-viet/{id}','MyController@postDetail')->name('setAdmin');
Route::get('setAdmin/user/{id}','AdminController@setAdmin')->name('setAdmin');




 


//cookie

Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');

//uploadFile

Route::get('uploadFile', 'MyController@uploadFile');
Route::post('postFile',['as'=>'postFile', 'uses'=>'MyController@postFile']);





Route::get('delete-member/user/{id}','AdminController@deleteMember');


Route::get('admin','AdminController@getAdmin')->name('admin');

Route::get('members','AdminController@getMember')->name('member');

Route::get('qlpost','AdminController@getPosts')->name('post');

Route::get('qlcmt','AdminController@getCMT')->name('cmt');

Route::get('delete-comment/comment/{id}','AdminController@deleteCMT');


Route::get('delete-post/post/{id}','AdminController@deletePost');

Route::get('edit-post/post/{id}','AdminController@editPost');

Route::post('update-post/{id}','AdminController@postEditPost');


