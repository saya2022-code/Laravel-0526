<form action="/articles" method="get" class="mt-2">
    <!-- {{ csrf_field() }} -->
    
    <div class='form-group'>
        {{ Form::label('keyword', 'キーワード:') }}
        {{ Form::text('keyword', null, ['class' => 'form-control']) }}
    </div>
    <div class='form-group'>
    <button type="submit" class="btn btn-primary">検索する</button>
    </form>
        <a href='/articles'>クリア</a>
    </div>
{{ Form::close() }}