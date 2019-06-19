<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\users;
use App\post;
use App\box;
use DB;
use App\Quotation;
use View;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
       
    }

    public function login(Request $request) {
        $username = $request['username'];
        $password = $request['password'];

        if (Auth::attempt(['username'=>$username,'password'=>$password]))
        {
            $user=Auth::user();
            Session::put('user',$user);
            $id_decentralization = Session::get('user')->id_decentralization;
            if ($id_decentralization == 0) {
                $user=DB::table('users')
                ->join('decentralization','users.id_decentralization','=','decentralization.id_decentralization')
                ->select(
                    'users.*',
                    'users.id',
                    'users.username',
                    'users.email',
                    'users.number_phone',
                    'decentralization.name_decentralization')->get();
                return View::make('admin/index',compact('user'));
            } else {
                echo('Ban ko co quyen, vi ban deo xung dang');
            }
           
        }
        
            else {
                return back()->withInput()->with('error','Tài khoản hoặc mất khẩu chưa đúng');
            }
    }

    public function getAdmin(){
        
        if (Session::has('user')) {
            $id_decentralization = Session::get('user')->id_decentralization;
            if ($id_decentralization == 0) {
                $user=DB::table('users')
                ->join('decentralization','users.id_decentralization','=','decentralization.id_decentralization')
                ->select(
                    'users.*',
                    'users.id',
                    'users.username',
                    'users.email',
                    'users.number_phone',
                    'decentralization.name_decentralization')->get();
                return View::make('admin/index',compact('user'));
            } else {
                echo('Ban ko co quyen, vi ban deo xung dang');
            }
        } else {
            return View::make('admin.loginAdmin');
        }
           
    }

    public function getMember(){
           $user=DB::table('users')
                ->join('decentralization','users.id_decentralization','=','decentralization.id_decentralization')
                ->select(
                    'users.*',
                    'users.id',
                    'users.username',
                    'users.email',
                    'users.number_phone',
                    'decentralization.name_decentralization')->get();
                    return View::make('admin/member',compact('user'));
    }

    public function deleteMember($id){

        $comment = DB::table('comment')
        ->where('user_id','=',$id) ->delete();
        
        $post = DB::table('post')
        ->where('user_created_id','=',$id) ->delete();

        $user = DB::table('users')
        ->where('id', '=', $id)->delete();
         return redirect()->route('admin');
    }

    public function getPosts(){
            $post=DB::table('post')
                ->join('users', 'post.user_created_id','=','users.id')
                ->join('box','post.box_id','=','box.id_box')
                ->select(
                    'post.*',
                    'users.id',
                    'users.username',
                    'users.avatar',
                    'box.id_box',
                    'box.name_box')
                    ->get();
                    return View::make('admin/qlpost',compact('post'));
    }

    public function getCMT(){
         $comment = DB::table('comment')
         ->join('post','comment.post_id','=','post.id_post')
         ->join('box','post.box_id','=','box.id_box')
         ->join('users','comment.user_id','=','users.id')
         ->select(
            'comment.*',
            'users.*',
            'post.*',
            'box.*'
        )
        ->get();
        return view('admin/qlcmt',compact('comment'));
    }

    public function deleteCMT($id){
        $comment = DB::table('comment')
        ->where('comment_id', '=', $id)->delete();
         return redirect('/qlcmt');
    }

    public function deletePost($id){
        $comment = DB::table('post')
        ->where('id_post', '=', $id)->delete();
         return redirect('/qlpost');
    }

    public function editPost($id){
       $post=DB::table('post')
                ->join('users', 'post.user_created_id','=','users.id')
                ->join('box','post.box_id','=','box.id_box')
                ->where('id_post','=',$id)
                ->select(
                    'post.*',
                    'users.id',
                    'users.username',
                    'users.avatar',
                    'box.id_box',
                    'box.name_box')
                    ->get();

        return View::make('admin/post',compact('post'));          
    }

    public function postEditPost(Request $request,$id){
        // $post = Post::find($id);
        DB::table('post')
            ->where('id_post', $id)
            ->update(['subject' => $request->title,'short_content'=>substr($request->editor1,0,200),
                        'content'=>$request->editor1
                    ]);
         return redirect('/qlpost');
    }

    public function setAdmin($id) {
        DB::update('update users set id_decentralization=? where id = ?',[0,$id]);
        return redirect()->route('admin');
    }
}
