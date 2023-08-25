<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Circle - 作品をポートフォリオに追加</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">Circle - 作品を投稿</h1>
        <div class="content"></div>
            <form action="/art" method="POST">
                @csrf
                <div class="content__name">
                    <h2>タイトル</h2>
                    <input type="text" name="art[name]" value="{{ old('art.name') }}"/>
                    <p class="title__error" style="color:red"> {{$errors->first('art.name')}} </p>
                </div>
                <div class="content__artist">
                    <h2>アーティスト名</h2>
                    <input type="text" name="art[artist]" value="{{ old('art.artist') }}"/>
                    <p class="title__error" style="color:red"> {{$errors->first('art.artist')}} </p>
                </div>
                <div class="content__url">
                    <h2>URL</h2>
                    <input type="text" name="art[url]" value="{{ old('art.url') }}"/>
                    <p class="title__error" style="color:red"> {{$errors->first('art.url')}} </p>
                </div>
                <div class="content__explain">
                    <h2>概要</h2>
                    <textarea name="art[explain]" placeholder="">{{ old('post.explain') }}</textarea>
                </div>
                
                <br><br>
                <div class="art">
                <input type="submit" value="store">
            </form>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </div>
    </body>
</html>
