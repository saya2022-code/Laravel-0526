@extends('layout')

    @section('content')
        <h1>paiza bb</h1>
        <p>{{ $message }}</p>
        <p>{{ $article->content }}</p>
        <p>{{ $article->username }}</p>
        
        <p>
        <a href='/articles' class='btn btn-outline-primary'>一覧に戻る</a>
        </p>

        <div>
            <!-- {{ Form::open(['method' => 'delete', 'route' => ['article.delete', $article->id]]) }}
                {{ Form::submit('削除') }}
            {{ Form::close() }} -->
            <form action="/article/{{ $article->id }}" method="post" class="mt-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500 btn btn-outline-secondary">{{ __('Delete') }}</button>
            </form>
        </div>
@endsection