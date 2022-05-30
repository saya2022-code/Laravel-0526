<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>paiza bbs</title>
        <style>body {padding: 60px;}</style>
        @include('style-sheet')
    </head>
    <body>
    @include('nav')
        <div class='container'>
            @yield('content')
        </div>
    </body>
</html>