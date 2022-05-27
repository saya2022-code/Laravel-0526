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

        <div>
            <!-- {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
                {{ Form::submit('削除') }}
            {{ Form::close() }} -->
            <form action="/article/{{ $article->id }}" method="post" class="mt-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500">{{ __('Delete') }}</button>
            </form>
        </div>
    </body>
</html>