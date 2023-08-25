<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Circle - </title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">Circle - 投稿編集画面</h1>
        <div class="content">
            <form action="/posts/{{$post->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="content__title">
                    <h2>記事タイトル</h2>
                    <input type="text" name="post[title]" value="{{ $post->title }}"/>
                </div>
                <div class="content__body">
                    <h2>説明・工夫した点など</h2>
                    <textarea name="post[body]" placeholder="">{{ $post->body }}</textarea>
                </div>
                        <br><br>
                <div class="art">

                <input type="submit" value="store">
            </form>
            <div class="footer">
                <a href="/{{$post->user}}">戻る</a>
            </div>
            <br>
            <h3>作品情報</h3>
                <div class=post style="margin: 40px 0;">
                <p style="font-size: 20px;font-weight: bold;">{{ $post->art->name }} - {{ $post->art->artist }}</p>
                <a class=URL href="{{ $post->art->url }}">{{ $post->art->url }}</a>
                <p class='explain'>{!! nl2br(e($art->explain)) !!}</p>
                <h5 class='subject' style="font-size: 20px;font-weight: bold;">参加アーティスト</h5>
                {{-- あるArtに関連するPostを投稿したユーザの名前を表示 --}}
                @foreach($post->art->users as $u) 
                    <a class=home href="/{{ $u->id }}">{{ $u->name }}</a>
                @endforeach
                </div>
        </div>
    </body>
</html>
