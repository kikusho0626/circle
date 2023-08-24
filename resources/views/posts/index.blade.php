<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Circle - ユーザページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Circle - ユーザポートフォリオ</h1>
        <a href='/'>投稿を作成（作品を選択）</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class=post style="margin: 40px 0;">
                    <p style="font-size: 24px;font-weight: bold;">{{ $post->title }}</p><br>
                    <a class=URL href="{{ $post->art->url }}">{{ $post->art->url }}</a>
                    <a class=URL href="/arts/{{ $post->art->id }}">[details]</a>
                    <p class='body'>{{ $post->body }}</p>
                    <a href="/posts/{{$post->id}}/edit">edit</a>
                    <form action='/posts/{{$post->id}}' id="form_{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type='button' onclick='deletePost({{$post->id}})'>delete</button>
                    </form>
                </div>
            @endforeach
        </div>

        <div class='paginate'>{{ $posts->links() }}</div>
        <script>
            function deletePost(id) {
                'use strict'
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>
