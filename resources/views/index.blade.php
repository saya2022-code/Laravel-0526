<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>paiza bbs</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>paiza bb</h1>
        <p>{{ $message }}</p>
        @foreach ($articles as $article)
            <p>
                <!-- <a href='{{ route("article.show", ["id" =>  $article->id]) }}'> -->
                <a href='/article/{{ $article->id }}'>
                    {{ $article->content }},
                    {{ $article->username }}
                </a>
            </p>
        @endforeach

        <div>
            <a href='/article/new'>新規投稿</a>
        </div>
    </body>
</html>