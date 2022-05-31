@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <!-- {{ Form::model($article, ['route' => ['article.update', $article->id]]) }} -->
    <!-- ルーティングが「/article/update/{id}」だとエラーになる-->
    <form action='/article/update/{{ $article->id }}' method="post" class="mt-2">
    @csrf
    <div class='form-group'>
            {{ Form::label('content', 'Content:') }}
            {{ Form::text('content', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('username', 'Name:') }}
            {{ Form::text('username', null) }}
        </div>
        <div class="form-group">
            <!-- {{ Form::submit('保存する', ['class' => 'btn btn-primary']) }} -->
            <button type="submit" class="btn btn-primary">保存する</button>

            <a href='/articles'>戻る</a>
        </div>
    {{ Form::close() }}
@endsection