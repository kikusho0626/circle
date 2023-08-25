<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Circle - 作品をポートフォリオに追加</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">Circle - “{{$art->name}}”をポートフォリオに追加</h1>
        <div class="content"></div>
            <form action="/posts/{{$post->id}}" method="POST">
                @csrf
                <div class="content__title">
                    <h2>記事タイトル</h2>
                    <input type="text" name="post[title]" value="{{ old('post.title') }}"/>
                    <p class="title__error" style="color:red"> {{$errors->first('post.title')}} </p>
                </div>
                <div class="content__body">
                    <h2>説明・工夫した点など</h2>
                    <textarea name="post[body]" placeholder="">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red"> {{$errors->first('post.body')}} </p>
                </div>
                
                        <br><br>
                <div class="art">
                <input type="submit" value="store">
            </form>
            <div class="footer">
                <a href="/art/{{$art->id}}">戻る</a>
            </div>
            <br>
            <h3>作品情報</h3>
                    <div class=post style="margin: 40px 0;">
                    <p style="font-size: 20px;font-weight: bold;">{{ $art->name }} - {{ $art->artist }}</p>
                    <a class=URL href="{{ $art->url }}">{{ $art->url }}</a>
                    <p class='explain'>{!! nl2br(e($art->explain)) !!}</p>
                    <h5 class='subject' style="font-size: 20px;font-weight: bold;">参加アーティスト</h5>
                    {{-- あるArtに関連するPostを投稿したユーザの名前を表示 --}}
                    @foreach($art->users as $u) 
                        <a class=home href="/{{ $u->id }}">{{ $u->name }}</a>
                    @endforeach
                </div>
        </div>
    </body>
</html>
