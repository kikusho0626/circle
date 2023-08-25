<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArtRequest;
use App\Models\Art;
use App\Models\User;

class ArtController extends Controller
{
    public function index(Art $art)//インポートしたArtをインスタンス化して$artとして使用。
    {
        return view('arts.index')->with(['arts' => $art->getPaginateByLimit()]); 
       //blade内で使う変数'arts'と設定。'arts'の中身にgetを使い、インスタンス化した$postを代入。
    } 
    public function delete(Art $art)
    {
        $post->delete();
        return redirect('/');
    }
    public function show(Art $art){
        return view('arts.show')->with(['art' => $art]);
    }
    public function edit(Art $art)
    {
        return view('arts.edit')->with(['art' => $art]);
    }
    public function update(Request $request, Art $art)
    {
        $input_art = $request['art'];
        $art->fill($input_art)->save();
    
        return redirect('/art/' . $art->id);
    }
    
    public function create(Art $art)
    {
        return view('arts.create');
    }
    public function store(ArtRequest $request, Art $art)
    {
        $input = $request['art'];
        $art->fill($input)->save();
        return redirect('/');
    }
}
