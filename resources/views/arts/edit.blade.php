<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Circle - 作品情報編集画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">Circle - 作品情報編集画面</h1>
        <div class="content"></div>
            <form action="/art/{{$art->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="content__title">
                    <h2>作品名</h2>
                    <input type="text" name="art[name]" value="{{ $art->name }}"/>
                </div>
                <div class="content__artist">
                    <h2>アーティスト名</h2>
                    <input type="text" name="art[artist]" value="{{ $art->artist }}"/>
                </div>
                <div class="content__body">
                    <h2>作品説明</h2>
                    <textarea name="art[explain]" placeholder="">{!! nl2br(e($art->explain)) !!}</textarea>
                </div>
                <div class="content__url">
                    <h2>URL</h2>
                    <input type="text" name="art[url]" value="{{ $art->url }}"/>
                </div>
                        <br><br>

                <input type="submit" value="store">
            </form>
            <div class="footer">
                <a href="/art/{{$art->id}}">戻る</a>
            </div>
            <br>
        </div>
    </body>
</html>
