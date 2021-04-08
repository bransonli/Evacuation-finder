<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('layout.css') }}">
        <title>
        @yield ('title')
        </title>
    </head>
    <body class=body>
        @yield ('content')
    </body>
</html>
