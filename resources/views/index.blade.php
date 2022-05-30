@extends('layout')

    @section('content')
        <h1>paiza bb</h1>
        <p>{{ $message }}</p>
        @include('search')

        <table class='table table-striped table-hover'>
        @foreach ($articles as $article)
            <tr>
                <td>
                    <a href='/article/{{ $article->id }}'>
                        {{ $article->content }},
                    </a>
                </td>
                <td>{{ $article->username }}</td>
            </tr>
        @endforeach
        </table>
        <div>
            <a href='/article/new' class='btn btn-outline-primary'>新規投稿</a>
        </div>
    @endsection
