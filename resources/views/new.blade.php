@extends('layout')

@section('content')
    <h1>paiza bbs</h1>
    <p>{{ $message }}</p>
    <!-- {{ Form::open(['route' => 'article.store']) }} -->
    <form action="/article" method="post" class="mt-2">
    @csrf
    <div class='form-group'>
            {{ Form::label('content', 'Content:') }}
            {{ Form::text('content', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('user_name', 'Name:') }}
            {{ Form::text('user_name', null) }}
        </div>
        <div class="form-group">
            <!-- {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }} -->
            <button type="submit" class="btn btn-primary">作成する</button>
            </form>
            <a href='/articles'>一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection