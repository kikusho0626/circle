<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use App\Models\Art;

class PostController extends Controller
{
    public function mypage(Post $post, User $user)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.mypage')->with(['posts' => $post->getByUser($user), 'user' => $user]); 
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/' . $post->user->id);
    }
    public function create(Post $post, Art $art)
    {
        $art_1 = Art::find(1);
        //idが1番のartを取得します。
        $art_1->users()->attach(Auth:user);
        //プロジェクトid:1にタグid:1を追加します。
        $post = array(
            'art_id' => $art->id,
            'gender' => '男性', 
        );
        return view('posts.create')->with(['post' => $post, 'art' => $art]);
    }
    public function store(Post $post, PostRequest $request) // 引数をRequestからPostRequestにする
    {
        if(!$request->art_id){
            return redirect( '/' )->with('status','作品との紐づけがうまくいっていません。最初からやり直してください。');
        }
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/' . $post->user->id);
    }
}
