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
        <p>{{ $article->content }}</p>
        <p>{{ $article->username }}</p>
        
        <p>
        <a href='/articles'>一覧に戻る</a>
        </p>
    </body>
</html>