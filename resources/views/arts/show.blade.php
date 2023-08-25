<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Art:{{$art->name}}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">Circle - 作品詳細</h1>
            <div class=art_detail style="margin: 40px 0;">
                <p style="font-size: 24px;font-weight: bold;">{{ $art->name }} - {{ $art->artist }}</p>
                <a class=URL href="{{ $art->url }}">{{ $art->url }}</a>
                <p class='explain'>{!! nl2br(e($art->explain)) !!}</p>
                <h6 class='subject' style="font-size: 20px;font-weight: bold;">参加アーティスト</h6>
                {{-- あるArtに関連するPostを投稿したユーザの名前を表示 --}}
                @foreach($art->users as $user) 
                    <a class=home href="/{{ $user->id }}">{{ $user->name }}</a>
                @endforeach
                <div class='edits'>
                    <a href="/art/{{$art->id}}/edit">[作品を編集]</a>
                    <a class='post' href="/posts/create/{{ $art->id }}" >[この作品をポートフォリオに追加する]</a>
                </div>
                <div class="footer">
                    <a href="/">戻る</a>
                </div>
                <form action='/art/{{$art->id}}' id="form_{{$art->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type='button' onclick='deletePost({{$art->id}})'>delete</button>
                </form>
            </div>
    </body>
</html>
