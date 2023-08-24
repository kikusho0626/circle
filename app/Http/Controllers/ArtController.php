<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;
use App\Models\User;

class ArtController extends Controller
{
    public function index(Art $art)//インポートしたArtをインスタンス化して$artとして使用。
    {
        return view('arts.index')->with(['arts' => $art->getPaginateByLimit()]); 
       //blade内で使う変数'arts'と設定。'arts'の中身にgetを使い、インスタンス化した$postを代入。
    } 
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/{$post->user}');
    }
}
