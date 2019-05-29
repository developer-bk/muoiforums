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
//

//chi tiet bai viet
Route::get('bai-viet/{id_post}','PostDetailController@detail')->name('bai-viettt');


Route::get("loginedddd/header", function(){
    return view('headerlg');
}) ->name('headerlg');


Route::get('/', 'MyController@index')->name('home'); 
//Viet bai
Route::get('viet-bai', function () {
    return view('post');
})->name('viet-bai');
Route::post('viet-bai','PostController@post');


//logout
Route::get('logout','AuthController@logout')->name('logout');

//ài đặt tài khoản 
Route::get('setting','SettingController@setting')->name('cai-dat');

Route::get('hello', function() {
    return 'heeloooo';
});
Route::get('viet', function(){
    echo "<h1>Viet</h1>";
});
//truyen tham so 
Route::get('hihiih/{ten}', function($ten){
    echo "ten cua ban la:" .$ten;
}) -> where(['ten' => '[a-zA-Z]+']);

//Dinh danh
 Route::get('route1', ['as'=> 'myroute', function(){
    echo 'cin chao hihi';
 }]);
 Route::get('route2', function(){
    return 'day la route 2';
 })->name('Myoute2');

 Route::get('route3', function(){
    return redirect()->route('Myoute2');
 });

 //Route group
 Route::group(['prefix'=>'User'], function(){
    Route::get('user1', function(){
        return 'user1';
    });
    Route::get('user2', function(){
        return 'user2';
    });
    Route::get('user3', function(){
        return 'user3';
    });
 });

 //GOi controller
 Route::get('controller','MyController@xinchao');

 //URRL
Route::get('request','MyController@myURL');

//gui nhan du lieu voi request

Route::get('getForms','MyController@getForms');

Route::post('postforms',['as'=>'postForms','uses'=>'MyController@postForms']);

//cookie

Route::get('setCookie','MyController@setCookie');
Route::get('getCookie','MyController@getCookie');

//uploadFile

Route::get('uploadFile', 'MyController@uploadFile');
Route::post('postFile',['as'=>'postFile', 'uses'=>'MyController@postFile']);

//view
Route::get('dataView/{name}',"MyController@passData");

///Database
Route::get('database',function(){
    Schema::create('user1',function($table){
        $table->increments('id');
        $table->string('ten',200);

    });
    echo('da tao database');
});

//queryBuilder
Route::get('db/get',function(){
    $data=DB::table('user')->where('id','=',6)->get();
    foreach ($data as $row) {
        foreach ($row as $key=>$value)
        {
            echo $key.":".$value;
            echo "<br>";
        }
        echo "<hr>";
    }
});

//model
Route::get('model/save',function(){
    $user = new App\users();
    $user->username='Viett';
   $user->password=bcrypt('123qweQWE');
   $user->email='123312saas';
   $user->first_name='V';
   $user->last_name='nt';
   $user->id_decentralization=3;
   $user->id_status=0;
   $user->save();
});

//get all user 

Route::get('model/user/all',function(){
    $user =  App\users::all()->toJson();
    return $user;
});

