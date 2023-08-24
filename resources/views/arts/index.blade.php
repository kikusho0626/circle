<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Circle - 作品一覧</h1>
        <a href='/art/create'>[作品を投稿する]</a>
        <div class='posts'>
            @foreach ($arts as $art)
                <div class=post style="margin: 40px 0;">
                    <p style="font-size: 24px;font-weight: bold;">{{ $art->name }} - {{ $art->artist }}</p>
                    <a class=URL href="{{ $art->url }}">{{ $art->url }}</a>
                    <p class='explain'>{{ $art->explain }}</p>
                    <h5 class='subject' style="font-size: 20px;font-weight: bold;">参加アーティスト</h5>
                    {{-- あるArtに関連するPostを投稿したユーザの名前を表示 --}}
                    @foreach($art->users as $user) 
                        <a class=home href="/{{ $user->id }}">{{ $user->name }}</a>
                    @endforeach
                    
                    </h5>
                    <a href="/art/{{$art->id}}">[作品を編集]</a>
                    <a class='post' href="/art/" >[この作品をポートフォリオに追加する]</a>
                    <form action='/art/{{$art->id}}' id="form_{{$art->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='button' onclick='deletePost({{$art->id}})'>delete</button>
                    </form>
                </div>
            @endforeach
        </div>

        <div class='paginate'>{{ $arts->links() }}</div>
        <script>
            function deleteArt(id) {
                'use strict'
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>
